<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Payment\PaymentRepository;
use App\Models\Payment;

class PaymentController extends Controller
{
    public $paymentRepository;

    public function __construct(PaymentRepository $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function index()
    {
        return view('admin.pages.payment.index')->with([
            'getPayment' => $this->paymentRepository->getPayment(),
        ]);
    }

    public function update($payment_id)
    {
        $this->paymentRepository->changePaymentStatus($payment_id);
        $this->paymentRepository->vacancyStatusToApproved($payment_id);

        return back()->with('success', 'გადახდის სტატუსი შეცვლილია');
    }
}
