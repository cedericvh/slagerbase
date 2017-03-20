app.controller('OrdersController', function ($http, $pusher, $scope, $sce) {
    $scope.bestelling = '<b>sss</b>';
    var $ctrl = this;
    var client = new Pusher('4739e7aee06f4c649563', {
        cluster: 'eu',
        encrypted: true
    });
    var pusher = $pusher(client);
    var ordersChannel = pusher.subscribe('orders');

    $ctrl.orders = [];
    $ctrl.checkedOrders = [];
    $ctrl.selectedOrder = {};

    $ctrl.openOrderPDF = function ()
    {
        $http.post(window.location.origin + '/api/orders/pdf', {orders: $ctrl.checkedOrders}, {responseType: 'arraybuffer'}).then(function (response) {
            var file = new Blob([response.data], {type: 'application/pdf'});
            var url = window.URL.createObjectURL(file);
            window.open(url, '_blank');
        })
    };
  
 

    $ctrl.getOrders = function (query)
    {
        $http.get(window.location.origin + '/api/orders', {params: query}).then(function (response) {
            $ctrl.orders = response.data.orders;
            $ctrl.checkedOrders = [];
            $scope.isChecked = false;
            angular.element(".angular-orders").removeClass('hidden');
        });
    };
  
  
    $ctrl.makeSpecial = function (query)
    {
        $http.post(window.location.origin + '/api/orders/special', {orders: $ctrl.checkedOrders}).then(function (response) {
            if (response.status == 200) {
                
            }
        });
    };
  
  
    $ctrl.makeHide = function (query)
    {
        $http.post(window.location.origin + '/api/orders/hide', {orders: $ctrl.checkedOrders}).then(function (response) {
            if (response.status == 200) {
                
            }
        });
    };  

    $ctrl.checkOrder = function (order, orderCheckbox)
    {
        if (orderCheckbox) {
            $ctrl.checkedOrders.push(order.id);
        } else {
            var index = $ctrl.checkedOrders.indexOf(order.id);
            $ctrl.checkedOrders.splice(index, 1);
        }
    };

    $ctrl.checkSingleOrder = function (order)
    {
        angular.forEach($ctrl.orders.data, function (order) {
            order.checked = false;
        });

        order.checked = true;

        $scope.isChecked = false;
        $ctrl.checkedOrders = [];
        $ctrl.checkedOrders.push(order.id);
    };

    $ctrl.checkAll = function (value)
    {
        $ctrl.checkedOrders = [];

        angular.forEach($ctrl.orders.data, function (order) {
            if (value) {
                $ctrl.checkedOrders.push(order.id);
            }
            order.checked = value;
        });
    };

    $ctrl.sendEmails = function (template)
    {
        $http.post(window.location.origin + '/api/orders/emails', {orders: $ctrl.checkedOrders, template: template}).then(function (response) {
            angular.element("#send-email").modal('toggle');
            if (response.status == 200) {
                $ctrl.successMessage = 'Emails are successfully queued.'
            }
        });
    };

    $ctrl.trustAsHtml = function (html)
    {
        return $sce.trustAsHtml(html);
    };
  
    $ctrl.getOrders({});

    ordersChannel.bind('App\\Events\\Client\\OrderCreated', function(data) {
        $ctrl.orders.data.unshift(data.order);
    });

    ordersChannel.bind('App\\Events\\Client\\OrderProcessed', function (data) {
        angular.forEach($ctrl.orders.data, function (order) {
            if (order.id == data.order.id) {
                var index = $ctrl.orders.data.indexOf(order);
                $ctrl.checkedOrders = [];
                $ctrl.orders.data[index] = data.order;
            }
        });
    });
}).filter('orders', function () {
    return function (str) {

        return str.replace(/(<|&lt;)br\s*\/*(>|&gt;)/g, ' ');
    };
});

