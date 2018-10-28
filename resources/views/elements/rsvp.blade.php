<a name="rsvp"></a>
    <div class="col-md-6">
        <div class="card" id="RSVP">
            <div class="card-header">Wedding RSVP (October 28th, 2018)</div>
            <div class="card-body">
                <form method="POST" action="{{ route('rsvp') }}" aria-label="RSVP">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" placeholder="Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" placeholder="email@example.com" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="accept" class="col-sm-4 col-form-label text-md-right">{{ __('Response') }}</label>

                        <div class="col-md-6">
                            <select class="form-control{{ $errors->has('accept') ? ' is-invalid' : '' }}" name="accept">
                                <option value="Dying to be there">Dying to be there! (Yes)</option>
                                <option value="Dreadfully Decline">Dreadfully decline (No)</option>
                            </select>

                            @if ($errors->has('accept'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('accept') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="count" class="col-sm-4 col-form-label text-md-right">{{ __('Souls Attending') }}</label>

                        <div class="col-md-6">
                            <select class="form-control{{ $errors->has('count') ? ' is-invalid' : '' }}" name="count">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="other">other (please specify in message)</option>
                            </select>

                            @if ($errors->has('count'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('count') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="message" class="col-sm-4 col-form-label text-md-right">{{ __('Message (optional)') }}</label>

                        <div class="col-md-6">
                            <textarea id="message" placeholder="Message to Nick and Mandi (optional)" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message">{{ old('email') }}</textarea>

                            @if ($errors->has('message'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary btn-lg float-right">
                                {{ __('Send RSVP') }} <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </form>
                    </div>
                </div>
            </div>