@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card reservation shadow-lg">
               
                <div class="card-header text-center ">
                    <span class="material-icons loyalty">loyalty</span>
                    診療予約
                </div>

                <div class="card-body col-md-12">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <label for="name">名前</label>

                                <input id="name" type="text" placeholder="Eloquent" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="name">メールアドレス</label>
                                <input id="email" type="email" placeholder="example@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="name">電話番号</label>
                                <input id="phone" type="text" placeholder="090-0000-0000" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="email">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            

                            <div class="col-md-6">
                                <label for="name">診療目的</label>
                                <select id="treatment" class="form-control">
                                    <option selected>選択</option>
                                    <option></option>
                                </select>

                                @error('treatment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="name">日付</label>
                                <input id="treatment" type="text" class="form-control @error('treatment') is-invalid @enderror" name="treatment" required autocomplete="treament">

                                @error('treatment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type='text' class="form-control datetime" />
                                
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="description">備考欄</label>
                                <textarea class="form-control" id="description" rows="5"></textarea>
                            </div>
                            
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-dark registration">
                                    会員登録
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection