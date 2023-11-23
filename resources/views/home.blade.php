@extends('master')
@section('title', 'Home')
@section('content')

    <main class="container">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{asset('assets/img/ordinateur2.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Rostyslav Luchyshyn</h1>
                <p class="lead">En tant que développeur web junior, mon objectif est d'acquérir une expérience pratique et de développer mes compétences techniques dans le domaine du développement web. Je cherche à contribuer de manière significative à des projets dynamiques, tout en continuant à apprendre et à élargir mes connaissances. Mon but ultime est de devenir un développeur web compétent et polyvalent, capable de concevoir et de mettre en œuvre des solutions innovantes pour répondre aux besoins des utilisateurs et des entreprises.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">CV en format pdf</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Projets</button>
                </div>
            </div>
        </div>
    </main>

@endsection