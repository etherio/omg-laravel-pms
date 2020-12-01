<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Inventory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\MassDestroyInventoryRequest;

class InventoryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('inventory_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inventories = Inventory::with(['product'])->get();

        return view('admin.inventories.index', compact('inventories'));
    }

    public function create()
    {
        abort_if(Gate::denies('inventory_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.inventories.create', compact('products'));
    }

    public function store(StoreInventoryRequest $request)
    {
        $inventory = Inventory::create($request->all());

        return redirect()->route('admin.inventories.index');
    }

    public function edit(Inventory $inventory)
    {
        abort_if(Gate::denies('inventory_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $inventory->load('product');

        return view('admin.inventories.edit', compact('products', 'inventory'));
    }

    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {
        $inventory->update($request->all());

        return redirect()->route('admin.inventories.index');
    }

    public function show(Inventory $inventory)
    {
        abort_if(Gate::denies('inventory_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inventory->load('product');

        return view('admin.inventories.show', compact('inventory'));
    }

    public function destroy(Inventory $inventory)
    {
        abort_if(Gate::denies('inventory_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inventory->delete();

        return back();
    }

    public function massDestroy(MassDestroyInventoryRequest $request)
    {
        Inventory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
