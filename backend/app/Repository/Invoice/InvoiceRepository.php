<?php

namespace App\Repository\Invoice;

use App\Http\Requests\InvoiceStoreRequest;
use App\Http\Requests\InvoiceUpdateRequest;
use App\Models\Invoice;

class InvoiceRepository implements InvoiceRepositoryInterface
{

  public function create(InvoiceStoreRequest $request)
  {
  }

  public function update(InvoiceUpdateRequest $request, int $id)
  {
  }

  public function delete(int $id)
  {
  }

  public function getAll()
  {
    try {
      return Invoice::with('user')->get();
    } catch (\Throwable $th) {
      throw $th;
      report($th);
    }
  }

  public function getById(int $id)
  {
  }
}
