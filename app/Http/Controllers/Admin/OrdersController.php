<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\EmailsRequest;
use App\Http\Requests\Admin\SpecialRequest;
use App\Http\Requests\Admin\HideRequest;
use App\Http\Requests\Admin\OrdersPDFRequest;
use App\Jobs\Admin\ProcessOrder;
use App\Jobs\Admin\SpecialOrder;
use App\Jobs\Admin\HideOrder;
use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\Template;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * OrdersController constructor.
     */
    public function __construct()
    {
        return view()->share('active', 'orders');
    }

    /**
     * Admin's orders page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $templates = Template::all();

        return view('admin.orders.index', [
            'templates'  =>  $templates
        ]);
    }

    /**
     * Get orders in json
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiIndex(Request $request)
    {
        $orders = Order::where('hide','=', $request->get('alsohidden'))->latest();         

      
        $orders->when($request->has('from_date'), function ($query) use ($request) {
            $query->where('date', '>=', Carbon::parse($request->get('from_date')));
        });

        $orders->when($request->has('to_date'), function ($query) use ($request) {
            $query->where('date', '<=', Carbon::parse($request->get('to_date')));
        });
      
        $orders->when($request->has('onlyspecial'), function ($query) use ($request) {
            $query->where('special', '=', $request->get('onlyspecial'));
        }); 
      
        $orders->when($request->has('alsohidden'), function ($query) use ($request) {          
          $query->where('hide', '=', $request->get('alsohidden'));
        });       

        return response()->json([
            'status' => 200,
            'orders' => $orders->paginate(100)
        ]);
    }

    /**
     * @param EmailsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiEmails(EmailsRequest $request)
    {
        try {
            $orders = Order::whereIn('id', $request->get('orders'))->get();
            $template = Template::find($request->get('template'));
            foreach ($orders as $order) {
                $this->dispatch(new ProcessOrder($order, $template));
            }
        } catch (\Exception $e) {
            logger($e);

            return response()->json([
                'status'    =>  $e->getCode()
            ]);
        }

        return response()->json([
            'status'    =>  200
        ]);
    }
  
    /**
     * @param SpecialRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiSpecial(SpecialRequest $request)
    {
        try {
            $orders = Order::whereIn('id', $request->get('orders'))->get();
            
            foreach ($orders as $order) {
                $this->dispatch(new SpecialOrder($order));
            }
        } catch (\Exception $e) {
            logger($e);

            return response()->json([
                'status'    =>  $e->getCode()
            ]);
        }

        return response()->json([
            'status'    =>  200
        ]);
    }  
  
    /**
     * @param SpecialRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiHide(HideRequest $request)
    {
        try {
            $orders = Order::whereIn('id', $request->get('orders'))->get();
            
            foreach ($orders as $order) {
                $this->dispatch(new HideOrder($order));
            }
        } catch (\Exception $e) {
            logger($e);

            return response()->json([
                'status'    =>  $e->getCode()
            ]);
        }

        return response()->json([
            'status'    =>  200
        ]);
    }    

    /**
     * @param OrdersPDFRequest $request
     * @return mixed
     */
    public function apiOrdersPDF(OrdersPDFRequest $request)
    {
        try {
            $orders = Order::whereIn('id', $request->get('orders'))->get();
            $pdfWrapper = app('dompdf.wrapper');
            
            $serorders = serialize($orders);          
          
            $num_newlines = substr_count($serorders, '<br />');
            $lijnen = $num_newlines / 2;
            $aantalorders = count($orders);
          
            logger($lijnen);
            logger(count($orders));
          
            
            $pdfWrapper->setPaper(array(0,0, 2.3 * 72, ($lijnen * 13) + ($aantalorders * 19 * 12)), "portrait")->loadView('pdf.orders', ['orders' => $orders]);
          
            //$pdfWrapper->setPaper('b8')->loadView('pdf.orders', ['orders' => $orders]);
        } catch (\Exception $e) {

            return logger($e);
        }

        return $pdfWrapper->stream();
    }
}
