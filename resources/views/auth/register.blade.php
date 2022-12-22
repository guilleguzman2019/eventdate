<x-guest-layout>
	<form method="POST" action="{{ route('register') }}" class="mt-5 py-5">
		@csrf

		<span class="text-uppercase fs-14 text-muted fw-600 mb-4 d-block">Comencemos</span>
		<h1 class="fs-48 fs-xs-36 fw-600 mb-4">Crear una nueva cuenta<span class="text-primary">.</span></h1>
		<p class="text-muted mb-4">¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-primary">Acceder</a></p>

		<div class="row">
			<div class="col-sm-3">
				<div class="mb-4">
					<div class="bg-secondary bg-opacity-10 px-4 py-2 rounded-4">
						<div class="d-flex align-items-center">
							<div class="flex-fill">
								<label class="fs-14 text-muted">{{ __('Name') }}</label><br>
								<input id="name" class="border-0 bg-transparent w-100" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre y Apellido" />
							</div>

							<img src="{{ asset('img/icos/ico-user.svg') }}" width="24" class="opacity-50">
						</div>
					</div>

					@error('name')
						<span class="fs-14 text-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="mb-4">
					<div class="bg-secondary bg-opacity-10 px-4 py-2 rounded-4">
						<div class="d-flex align-items-center">
							<div class="flex-fill">
								<label class="fs-14 text-muted">{{ __('Email') }}</label><br>
								<input id="email" class="border-0 bg-transparent w-100" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="usuario@mail.com" />
							</div>

							<img src="{{ asset('img/icos/ico-email.svg') }}" width="24" class="opacity-50">
						</div>
					</div>

					@error('email')
						<span class="fs-14 text-danger">{{ $message }}</span>
					@enderror
				</div>

                <div class="mb-4">
                    <div class="bg-secondary bg-opacity-10 px-4 py-2 rounded-4">
                        <div class="d-flex align-items-center">
                            <div class="flex-fill">
                                <label class="fs-14 text-muted">{{ __('Password') }}</label><br>
                                <input id="password" class="border-0 bg-transparent w-100" type="password" name="password" placeholder="****" required />
                            </div>

                            <img src="{{ asset('img/icos/ico-pass.svg') }}" width="24" class="opacity-50">
                        </div>
                    </div>

                    @error('password')
                        <span class="fs-14 text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="bg-secondary bg-opacity-10 px-4 py-2 rounded-4">
                        <div class="d-flex align-items-center">
                            <div class="flex-fill">
                                <label class="fs-14 text-muted">{{ __('Confirm Password') }}</label><br>
                                <input id="password_confirmation" class="border-0 bg-transparent w-100" type="password" name="password_confirmation" placeholder="****" required />
                            </div>

                            <img src="{{ asset('img/icos/ico-pass.svg') }}" width="24" class="opacity-50">
                        </div>
                    </div>

                    @error('password_confirmation')
                        <span class="fs-14 text-danger">{{ $message }}</span>
                    @enderror
                </div>
			</div>
		</div>

		@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
			<div class="form-check text-muted mb-4 fs-14">
				<input class="form-check-input" name="terms" type="checkbox" value="1" id="terms">
				<label class="form-check-label" for="terms">{!! __('I agree to the :terms_of_service and :privacy_policy', ['terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>', 'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',]) !!}</label>
			</div>
		@endif

		<button class="btn btn-primary px-5 rounded-4 py-3 fs-18">{{ __('Register') }}</button>
	</form>
</x-guest-layout>