@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.inventory.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.inventories.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.inventory.fields.id') }}
                            </th>
                            <td>
                                {{ $inventory->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.inventory.fields.stocks') }}
                            </th>
                            <td>
                                {{ $inventory->stocks }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.inventory.fields.product') }}
                            </th>
                            <td>
                                {{ $inventory->product->name ?? '' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.inventories.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>



@endsection
