@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.return.title') }}
    </div>
    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.returnproducts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.return.fields.id') }}
                        </th>
                        <td>
                            {{ $returnproduct->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.return.fields.name') }}
                        </th>
                        <td>
                            {{ $returnproduct->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.return.fields.email') }}
                        </th>
                        <td>
                            {{ $returnproduct->email ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.return.fields.phone') }}
                        </th>
                        <td>
                            {{ $returnproduct->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.return.fields.order_id') }}
                        </th>
                        <td>
                            {{ $returnproduct->order_id ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.return.fields.product_name') }}
                        </th>
                        <td>
                            {{ $returnproduct->product_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.return.fields.product_id') }}
                        </th>
                        <td>
                            {{ $returnproduct->product_code ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.return.fields.product_quantity') }}
                        </th>
                        <td>
                            {{ $returnproduct->product_quantity ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.return.fields.reason') }}
                        </th>
                        <td>
                            {{ $returnproduct->reason ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.return.fields.other_details') }}
                        </th>
                        <td>
                            {{ $returnproduct->other_details ?? '' }}
                        </td>
                    </tr>                
                    <tr>
                        <th>
                            {{ trans('cruds.return.fields.created_at') }}
                        </th>
                        <td>
                            {{ $returnproduct->created_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.returnproducts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection