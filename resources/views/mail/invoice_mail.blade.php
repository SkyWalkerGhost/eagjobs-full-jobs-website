@component('mail::message')
# INVOICE

# ORDER ID: {{ $content['order_id'] }}<br>

<p style="color: red; font-weight: bold;">
	თქვენს მიერ გაკეთებულ დასაქმების განაცხადზე, გამოგეგზავნათ Invoice.
	გთხოვთ გადაიხადოთ აღნიშნული დასაქმების განაცხადის ღირებულება.
</p>

<p style="color: red; font-weight: bold;">
	დასაქმების განაცხადი გამოქვეყნდება, თანხის გადახდის დადასტურების შემდგომ.
</p>

ვაკანსიის სახელი: {{ $content['vacancy_name'] }}<br>
ვაკანსიის ტიპი: {{ $content['vacancy_type'] }} (14 დღე) <br>

<b style="color: red;">გადასახდელი თანხა<b>: {{ $content['amount_price'] }}₾

კომპანიის სახელი: {{ $content['company_name'] }}<br>
ელ-ფოსტა: {{ $content['company_email'] }}<br><br>

Invoice-ის შექმნის თარიღი: {{ $content['invoice_send_time'] }}<br>

@component('mail::button', ['url' => '123'])
Download PDF
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
