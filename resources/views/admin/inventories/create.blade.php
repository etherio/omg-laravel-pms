@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.inventory.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.inventories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="required" for="stocks">{{ trans('cruds.inventory.fields.stocks') }}</label>
                    <input class="form-control {{ $errors->has('stocks') ? 'is-invalid' : '' }}" type="number" name="stocks"
                        id="stocks" value="{{ old('stocks', '0') }}" step="1" required>
                    @if ($errors->has('stocks'))
                        <div class="invalid-feedback">
                            {{ $errors->first('stocks') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.inventory.fields.stocks_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="product_id">{{ trans('cruds.inventory.fields.product') }}</label>
                    <select class="form-control select2 {{ $errors->has('product') ? 'is-invalid' : '' }}" name="product_id"
                        id="product_id" required>
                        @foreach ($products as $id => $product)
                            <option value="{{ $id }}" {{ old('product_id') == $id ? 'selected' : '' }}>{{ $product }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('product'))
                        <div class="invalid-feedback">
                            {{ $errors->first('product') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.inventory.fields.product_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>



@endsection
