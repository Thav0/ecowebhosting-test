<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvoiceStoreRequest;
use App\Http\Requests\InvoiceUpdateRequest;
use App\Repository\Invoice\InvoiceRepositoryInterface;

class InvoiceController extends Controller
{
    private $repository;

    public function __construct(InvoiceRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $invoices = $this->repository->getAll();

        return response($invoices);
    }

    public function store(InvoiceStoreRequest $request)
    {
    }

    public function update(InvoiceUpdateRequest $request, int $id)
    {
    }

    public function destroy(int $id)
    {
    }

    public function show(int $id)
    {
        $question = $this->repository->getById($id);

        return response()->json($question);
    }
}
