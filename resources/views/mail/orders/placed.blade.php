<x-mail::message>
# Order placed Successfully!

Thank You for your order. your Order Number is: {{$order->id}}.

<x-mail::button :url="$url">
View order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
