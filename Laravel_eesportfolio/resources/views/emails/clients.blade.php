@component('mail::message')
# Your Message has been received!


I thank you and I Appreciate your business very much. I will reply ASAP.

Sincerely,

**Ernesto Silva
ernestosilva@eesportfolio.com
edgard.ernesto.silva@gmail.com
+1 250-864-0736**


@component('mail::button', ['url' => 'http://www.eesporfolio.ca'])
EESPortfolio
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
