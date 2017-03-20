@extends('admin.layouts.master')

@section('head')
    <link rel="stylesheet" href="{{ asset('js/jquery-ui/themes/smoothness/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/jqueryui-timepicker-addon/dist/jquery-ui-timepicker-addon.css') }}">
@endsection

@section('content')
    <div ng-controller="OrdersController as $ctrl">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info">
                            <h5>Bestellingen opvolgen</h5>
                        </div>
                    </div>
                    <div class="angular-orders hidden">
                        <div class="col-lg-12">
                            <div class="alert alert-success" ng-if="$ctrl.successMessage">
                                @{{ $ctrl.successMessage }}
                            </div>
                            <div class="alert alert-danger" ng-if="$ctrl.errorMessage">
                                @{{ $ctrl.errorMessage }}
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <form>
                                <div class="form-group">
                                    <label for="from_date">Van datum & tijd</label>
                                    <input type="text" ng-model="query.from_date" id="from_date" value="{{ request('from_date') }}" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="to_date">Tot datum & tijd</label>
                                    <input type="text" ng-model="query.to_date" id="to_date" value="{{ request('to_date') }}" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="onlyspecial">Enkel speciale orders</label>                                  
                                    <input type="checkbox" ng-model="query.onlyspecial" ng-true-value="1" ng-false-value="" value="{{ request('onlyspecial') }}" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="onlyspecial">Enkel verborgen</label>                                  
                                    <input type="checkbox" ng-model="query.alsohidden" ng-true-value="1" ng-false-value="" value="{{ request('alsohidden') }}" class="form-control" autocomplete="off">
                                </div>                              
                                <div class="form-group">
                                    <button ng-click="$ctrl.getOrders(query)" class="btn btn-default btn-block">
                                        <span class="glyphicon glyphicon-search"></span> Zoek
                                    </button>
                                    <a href="/admin/orders" class="btn btn-default btn-block">
                                        Herlaad de pagina
                                    </a>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-10">
                            <div class="row" ng-show="$ctrl.checkedOrders.length">
                                <div class="col-lg-12 text-center">
                                    <div class="btn-group" role="group" aria-label="...">
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#send-email">
                                            <span class="glyphicon glyphicon-envelope"></span> Mail alle geselecteerden met templatemail
                                        </button>
                                        <button type="button" class="btn btn-default" ng-click="$ctrl.openOrderPDF()">
                                            <span class="glyphicon glyphicon-print"></span> Print alle geselecteerde orders
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox">
                                            <label>
                                            <input type="checkbox" ng-model="isChecked" ng-click="$ctrl.checkAll(isChecked)">
                                            </label>
                                        </div>
                                    </th>
                                    <th>Status</th>
                                    <th>Speciaal</th>
                                    <th>Datum binnengekomen</th>
                                    <th>Afhalen</th>
                                    <th>Naam</th>
                                    <th>Order</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="order in $ctrl.orders.data" ng-class="[order.special == true ? 'bgspecial' : '', order.hide == true ? 'hideorder' : '']">
                                    <td>
                                        <input type="checkbox"
                                                ng-model="order.checked"
                                                ng-change="$ctrl.checkOrder(order, order.checked)">
                                    </td>
                                    <td>
                                        <span class="label label-warning"
                                              ng-if="order.rejected == null">
                                            New!
                                        </span>
                                        <span class="label label-success"
                                              ng-if="order.rejected == true">
                                            Success!
                                        </span>
                                        <span class="label label-danger"
                                              ng-if="order.rejected == false">
                                            Failed!
                                        </span>
                                    </td>
                                    <td>
                                        <span class="glyphicon glyphicon-star"
                                              ng-if="order.special == true">
                                            &nbsp;
                                        </span>               
                                    </td>
                                    <td>@{{ order.date }}</td>
                                    <td>@{{ order.dategetorder }}</td>
                                    <td>@{{ order.name | limitTo: 40 }}</td>
                                    <td>
                                        @{{ order.bestelling | limitTo: 40 | orders }}<span ng-if="order.bestelling.length > 40"
                                              style="cursor: pointer;"
                                              ng-click="$ctrl.selectedOrder = order"
                                              data-toggle="modal"
                                              data-target="#view-order">...</span>
                                    </td>
                                    <td>
                                        <div class="btn-group pull-right" role="group" aria-label="...">
                                            <button type="button" class="btn btn-default"
                                                    data-toggle="modal"
                                                    data-target="#send-email"
                                                    ng-click="$ctrl.checkSingleOrder(order)">
                                                <span class="glyphicon glyphicon-envelope"></span> Mail
                                            </button>
                                            <button type="button" class="btn btn-default" 
                                                    ng-click="$ctrl.checkSingleOrder(order); $ctrl.openOrderPDF() ">
                                                <span class="glyphicon glyphicon-print"></span> Print
                                            </button>
                                            <button type="button" class="btn btn-default"
                                                    ng-click="$ctrl.selectedOrder = order"
                                                    data-toggle="modal"
                                                    data-target="#view-order">
                                                <span class="glyphicon glyphicon glyphicon-eye-open"></span> Kijk
                                            </button>
                                            <button type="button" class="btn btn-default"
                                                    ng-click="$ctrl.checkSingleOrder(order); $ctrl.makeSpecial() "                                                    
                                                    >
                                                <span class="glyphicon glyphicon glyphicon-star"></span> Speciaal
                                            </button> 
                                            <button type="button" class="btn btn-default"
                                                    ng-click="$ctrl.checkSingleOrder(order); $ctrl.makeHide() "                                                    
                                                    >
                                                <span class="glyphicon glyphicon glyphicon-trash"></span> Verberg
                                            </button>                                           
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    {{--<pagination></pagination>--}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.orders.partials.email-modal')
        @include('admin.orders.partials.view-order')
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jqueryui-timepicker-addon/dist/jquery-ui-timepicker-addon.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jqueryui-timepicker-addon/dist/i18n/jquery-ui-timepicker-addon-i18n.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jqueryui-timepicker-addon/dist/jquery-ui-sliderAccess.js') }}"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
    <script>
        $("document").ready(function () {
            $('#from_date').datetimepicker()
            $('#to_date').datetimepicker()
        });
    </script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <script src="{{ asset('js/angular/app/admin/orders/orders.controller.js') }}"></script>
    <script src="{{ asset('js/angular/app/admin/orders/orders-pagination.directive.js') }}"></script>
@endsection
