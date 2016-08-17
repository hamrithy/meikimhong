@extends('_layout.dashboard')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading​">
            <b>អត្រាប្តូរប្រាក់</b>
        </div>
        <div class="panel-body">
            <button
                    class="btn btn-default"
                    data-toggle="modal"
                    data-target="#customer-type-popup"
            >
                <span class="fa fa-plus-circle"></span>
                បន្ថែមអត្រាប្តូរប្រាក់
            </button>
            <br/><br/>
            <table class="table table-bordered table-striped">
                <thead>
                <th>
                    Id
                </th>
                <th>
                    Name
                </th>

                <th>
                    Description
                </th>
                <th width="150px">
                    Action
                </th>
                </thead>
                <tr data-ng-repeat="customer in customerType.elements">
                    <td>
                        <span data-ng-bind="customer.id"></span>
                    </td>
                    <td>
                        <span data-ng-bind="customer.name"></span>
                    </td>
                    <td>
                        <span data-ng-bind="customer.description"></span>
                    </td>
                    <td>
                        <button class="btn btn-default" data-ng-click="edit(customer);">
                            <span class="fa fa-edit"></span>
                        </button>
                        <button
                                class="btn btn-success"
                                data-ng-click="updateStatus(customer);"
                                data-ng-if="customer.status == 1"
                        >
                            <span class="fa fa-check-square-o"></span>
                        </button>
                        <button
                                class="btn btn-warning"
                                data-ng-if="customer.status == 0"
                                data-ng-click="updateStatus(customer);"
                        >
                            <span class="fa fa-minus-square-o"></span>
                        </button>
                    </td>
                </tr>
            </table>
            <div
                    data-ng-if="customerType.elements == 0"
            >
                <div class="alert alert-warning alert-dismissible">
                    <strong>Warning!</strong> No product post.
                </div>
            </div>
            <div
                    data-ng-if="!customerType"
                    class="align_center"
            >
                <i class="fa fa-refresh fa-spin" style="font-size: 100px;"></i>
            </div>
        </div>
    </div>
    <div
            class="panel-footer"
            data-ng-show="totalItems > 10"
    >
        <pagination
                total-items="totalItems"
                ng-model="currentPage"
                ng-change="pageChanged()"
                max-size="5"
                items-per-page="10"
                boundary-links="true"
        ></pagination>
    </div>


@stop