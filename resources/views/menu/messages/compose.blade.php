@extends('layouts.messages')

@section('message-page')
<div class="container">
    <form method="POST" action="/messages/compose">
    @csrf
        <div class="row">
            <table class="table table-sm table-dark">
                <thead>
                    <tr>
                        <th colspan="2">{{ __('Compose') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="w-10">
                            <label for="character" class="col-form-label">Recipient</label>
                        </td>
                        <td>
                            <div class="col-md-8 col-lg-6">
                                <div class="input-group input-group-sm">
                                    <input id="character" type="input" class="form-control{{ $errors->has('character') ? ' is-invalid' : '' }}" name="character" value="{{ old('character') }}" required autofocus>
                                    @if ($errors->has('character'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('character') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="subject" class="col-form-label">Subject</label>
                        </td>
                        <td>
                            <div class="col-md-8 col-lg-6">
                                <div class="input-group input-group-sm">
                                    <input id="subject" type="input" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" value="{{ old('subject') }}" required>
                                    @if ($errors->has('subject'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('subject') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="message" class="col-form-label">Message</label>
                        </td>
                        <td>
                            <div class="col-md-8 col-lg-6">
                                <div class="form-group mb-0">
                                    <textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" rows="5" id="message" name="message" required>{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <button class="btn btn-link float-right" type="submit">Send</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>
@endsection
