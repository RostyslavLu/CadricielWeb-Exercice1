@extends('master')
@section('title', 'Contactez moi')
@section('content')

<main class="container">
    <!-- Contact form-->
    <div class="py-5 px-4 px-md-5">
        <div class="text-center">
            <h1 class="display-5 fw-bolder mb-0">Contactez moi</h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                @isset($data)
                <p><strong>Name:&nbsp;</strong>{{ $data->name ?? '' }}</p>
                <p><strong>Email:&nbsp;</strong>{{ $data->email ?? '' }}</p>
                <p><strong>Phone:&nbsp;</strong>{{ $data->phone ?? '' }}</p>
                <p><strong>Message:&nbsp;</strong>{{ $data->message ?? '' }}</p>
                @else
                <form method="post" class="py-5">
                    @csrf
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input name="name" class="form-control" id="name" type="text" placeholder="Saisie votre nom" />
                        <label for="name">Nom et prénom</label>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input name="email" class="form-control" id="email" type="email" placeholder="Saisie votre courriel" />
                        <label for="email">Courriel</label>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input name="phone" class="form-control" id="phone" type="tel" placeholder="Saisie votre numéro de téléphone" />
                        <label for="phone">Numéro de téléphone</label>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea name="message" class="form-control" id="message" type="text" placeholder="Saisie votre message" style="height: 10rem"></textarea>
                        <label for="message">Message</label>
                    </div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Envoyer</button>
                </form>
                @endisset
            </div>
        </div>
    </div>
</main>

@endsection

@section('js')
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection