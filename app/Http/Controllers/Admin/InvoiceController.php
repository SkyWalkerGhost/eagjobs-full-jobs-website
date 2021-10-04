<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use App\Events\SendInvoiceMail;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\Vacancy;
use Carbon\Carbon;
use App\Repositories\Invoice\InvoiceRepository;

class InvoiceController extends Controller
{
    protected $invoiceRepository;

    public function __construct(InvoiceRepository $invoiceRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
    }

    public function index()
    {
        return view('admin.pages.invoice.index')->with([
            'getInvoice' => $this->invoiceRepository->getInvoice(),
        ]);
    }

    public function store(Request $request)
    {
        $invoice = Invoice::create($this->invoiceRepository->storeInvoice());

        Event::dispatch(new SendInvoiceMail($invoice));

        // return back()->with('success', 'Invoice გაგზავნილია ელ-ფოსტზე');
    }
}
