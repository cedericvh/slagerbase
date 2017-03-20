app.directive('pagination', function () {
    return {
        templateUrl: '../angular/app/admin/orders/orders-pagination.template.html',
        controller: ['$scope', PaginationController]
    }
});

function PaginationController($scope) {

    $scope.rangeFrom = function (to)
    {
        var response = [];

        for (var i = 0; i <= to; i++)
        {
            if (i > 1) {
                response.push(i);
            }
        }

        return response;
    }
}

