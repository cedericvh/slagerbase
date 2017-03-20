<div class="modal fade" id="view-order" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">View order</h4>
            </div>
            <div class="modal-body" style="word-wrap: break-word;">
                <p><b>Naam:</b> @{{ $ctrl.selectedOrder.name }}</p>
                <p><b>Klantennummer:</b> @{{ $ctrl.selectedOrder.number }}</p>
                <p><b>E-Mail:</b> @{{ $ctrl.selectedOrder.email }}</p>
                <p><b>Telefoonnummer:</b> @{{ $ctrl.selectedOrder.phone_number }}</p>
                <p><b>Bestelling:</b> <div ng-bind-html="$ctrl.trustAsHtml($ctrl.selectedOrder.bestelling)"></div></p>
                <p><b>Datum en uur afhaling:</b> @{{ $ctrl.selectedOrder.dategetorder }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>