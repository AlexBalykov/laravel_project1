<x-my-layout>
	<section class="text-gray-600 body-font relative">
		<div class="container px-5 py-24 mx-auto">
			<div class="flex flex-col text-center w-full mb-12">
				<h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Register</h1>
			</div>
			<div class="lg:w-1/2 md:w-2/3 mx-auto">
				<x-jet-validation-errors class="mb-4" />
				<form method="POST" action="{{ route('register') }}" class="flex flex-wrap -m-2">
					@csrf
					<div class="p-2 w-full">
						<div class="relative">
							<label for="name" class="leading-7 text-sm text-gray-600">{{ __('Name') }}</label>
							<input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('name') }}">
						</div>
					</div>
					<div class="p-2 w-full">
						<div class="relative">
							<label for="email" class="leading-7 text-sm text-gray-600">{{ __('Email') }}</label>
							<input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('email') }}">
						</div>
					</div>
					<div class="p-2 w-full">
						<div class="relative">
							<label for="password" class="leading-7 text-sm text-gray-600">{{ __('Password') }}</label>
							<input type="password" id="password" name="password" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
						</div>
					</div>
					<div class="p-2 w-full">
						<div class="relative">
							<label for="password_confirmation" class="leading-7 text-sm text-gray-600">{{ __('Confirm Password') }}</label>
							<input type="password" id="password_confirmation" name="password_confirmation" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
						</div>
					</div>
					<!-- На доработку -->
					@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
						<div class="mt-4">
							<x-jet-label for="terms">
								<div class="flex items-center">
									<x-jet-checkbox name="terms" id="terms"/>

									<div class="ml-2">
										{!! __('I agree to the :terms_of_service and :privacy_policy', [
												'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
												'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
										]) !!}
									</div>
								</div>
							</x-jet-label>
						</div>
					@endif
					<!-- End На доработку -->
					<div class="p-2 w-full">
						<div class="relative">
							<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
								{{ __('Already registered?') }}
							</a>
						</div>
					</div>
					<div class="p-2 w-full">
						<button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">{{ __('Register') }}</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</x-my-layout>
