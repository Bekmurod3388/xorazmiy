@extends('layouts.layout')

@section('content')

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8"
             style="background-image: url({{ asset('/fasset/images/slide1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-banner-cont">
                        <h2>{{ __('contact.banner.title') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">

            {{-- Title --}}
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    <div class="text-center">
                        <h5 class="text-uppercase mb-2" style="letter-spacing: .5px;">
                            {{ __('contact.section.kicker') }}
                        </h5>
                        <h2 class="mb-0">{{ __('contact.section.title') }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                {{-- Form --}}
                <div class="col-lg-7">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body p-4 p-md-5">

                            <div id="formAlert" class="alert d-none" role="alert"></div>

                            <form id="contactForm">
                                @csrf

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="mb-1">{{ __('contact.form.name_label') }}</label>
                                        <input type="text"
                                               name="name" id="name"
                                               class="form-control"
                                               placeholder="{{ __('contact.form.name') }}"
                                               required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="mb-1">{{ __('contact.form.phone_label') }}</label>
                                        <input type="text"
                                               name="phone" id="phone"
                                               class="form-control"
                                               placeholder="{{ __('contact.form.phone') }}"
                                               required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="mb-1">{{ __('contact.form.message_label') }}</label>
                                    <textarea name="message" id="message"
                                              class="form-control"
                                              rows="5"
                                              placeholder="{{ __('contact.form.message') }}"
                                              required></textarea>
                                </div>

                                <div class="d-flex align-items-center justify-content-between">
                                    <button type="submit" id="sendBtn" class="btn btn-primary px-4">
                                        <i class="fa fa-paper-plane mr-2"></i>{{ __('contact.form.send') }}
                                    </button>

                                    <small class="text-muted">
                                        {{ __('contact.form.note') }}
                                    </small>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                {{-- Info --}}
                <div class="col-lg-5">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body p-4 p-md-5">
                            <h5 class="mb-4">{{ __('contact.info.title') }}</h5>

                            <div class="media mb-3">
                                <div class="mr-3" style="width: 40px; height: 40px; border-radius: 10px; background:#f1f3f5; display:flex; align-items:center; justify-content:center;">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <div class="font-weight-bold">{{ __('contact.info.address_label') }}</div>
                                    <div class="text-muted">{{ __('contact.info.address') }}</div>
                                </div>
                            </div>

                            <div class="media mb-3">
                                <div class="mr-3" style="width: 40px; height: 40px; border-radius: 10px; background:#f1f3f5; display:flex; align-items:center; justify-content:center;">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <div class="font-weight-bold">{{ __('contact.info.phone_label') }}</div>
                                    <div class="text-muted">{{ __('contact.info.phone') }}</div>
                                </div>
                            </div>

                            <div class="media mb-4">
                                <div class="mr-3" style="width: 40px; height: 40px; border-radius: 10px; background:#f1f3f5; display:flex; align-items:center; justify-content:center;">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <div class="font-weight-bold">{{ __('contact.info.email_label') }}</div>
                                    <div class="text-muted">{{ __('contact.info.email') }}</div>
                                </div>
                            </div>

                            <hr>

                            <div class="mt-3">
                                <div class="font-weight-bold mb-2">{{ __('contact.info.hours_label') }}</div>
                                <div class="text-muted mb-1">{{ __('contact.info.hours_weekdays') }}</div>
                                <div class="text-muted">{{ __('contact.info.hours_weekend') }}</div>
                            </div>
                        </div>
                    </div>

                    {{-- Quick actions --}}
                    <div class="d-flex flex-wrap" style="gap: 10px;">
                        <a class="btn btn-outline-primary btn-sm" href="tel:+998933378110">
                            <i class="fa fa-phone mr-2"></i>{{ __('contact.actions.call') }}
                        </a>
                        <a class="btn btn-outline-primary btn-sm" href="mailto:info@urgtex3.uz">
                            <i class="fa fa-envelope mr-2"></i>{{ __('contact.actions.email') }}
                        </a>
                    </div>
                </div>
            </div>

            {{-- Map --}}
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card shadow-sm border-0 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="embed-responsive embed-responsive-21by9">
                                <iframe class="embed-responsive-item"
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11950.139718626193!2d60.6600326!3d41.5143521!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41dfc76634d62f17%3A0xa13f0140d089df2b!2sPaxtakor%20Kollej!5e0!3m2!1sru!2s!4v1716638882030!5m2!1sru!2s"
                                        style="border:0;"
                                        allowfullscreen
                                        loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <x-layouts.footer></x-layouts.footer>

    {{-- Minimal styling (Bootstrap 4 compatible) --}}
    <style>
        #contact-page .card { border-radius: 14px; }
        #contact-page .form-control { border-radius: 10px; }
        #contact-page .btn { border-radius: 10px; }
    </style>

    <script>
        const form = document.getElementById('contactForm');
        const alertBox = document.getElementById('formAlert');
        const btn = document.getElementById('sendBtn');

        function showAlert(type, text){
            alertBox.classList.remove('d-none','alert-success','alert-danger');
            alertBox.classList.add(type === 'success' ? 'alert-success' : 'alert-danger');
            alertBox.textContent = text;
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            btn.disabled = true;

            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const message = document.getElementById('message').value.trim();

            fetch("{{ route('messages.store', ['locale' => app()->getLocale()]) }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    "Accept": "application/json"
                },
                body: JSON.stringify({ name, phone, message })
            })
                .then(async (res) => {
                    const data = await res.json().catch(() => ({}));

                    if (!res.ok) {
                        if (data.errors) {
                            const firstKey = Object.keys(data.errors)[0];
                            showAlert('error', data.errors[firstKey][0]);
                        } else {
                            showAlert('error', data.message || "{{ __('contact.alert.error') }}");
                        }
                        return;
                    }

                    showAlert('success', data.message || "{{ __('contact.alert.success') }}");
                    form.reset();
                })
                .catch(() => {
                    showAlert('error', "{{ __('contact.alert.error') }}");
                })
                .finally(() => {
                    btn.disabled = false;
                });
        });
    </script>

@endsection
