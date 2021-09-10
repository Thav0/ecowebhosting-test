<?php

namespace App\Repository\Invoice;

use App\Http\Requests\InvoiceStoreRequest;
use App\Http\Requests\InvoiceUpdateRequest;

interface InvoiceRepositoryInterface {
    public function create(InvoiceStoreRequest $request);
    public function update(InvoiceUpdateRequest $request, int $id);
    public function delete(int $id);
    public function getAll();
    public function getById(int $id);
}