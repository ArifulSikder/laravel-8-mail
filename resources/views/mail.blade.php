@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-6 offset-3">
            <form action="{{ URL::to('/send-mail') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="subject">subject</label>
                    <input type="text" class="form-control" name="subject">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <select name="email" id="email[]" class="form-control select2 multiple" data-validation="required">
                        <option>Select One</option>
                        <option value="sajib.wakeupict@gmail.com">sajib.wakeupict@gmail.com</option>
                        <option value="rimonhoshen@gmail.com">rimonhoshen@gmail.com</option>
                        <option value="arifulsikder62@gmail.com">arifulsikder62@gmail.com</option>
                        <option value="mpranto394@gmail.com">mpranto394@gmail.com</option>
                        <option value="pritomwakeupictacademy@gmail.com">pritomwakeupictacademy@gmail.com</option>
                        <option value="sohanmd381@gmail.com">sohanmd381@gmail.com</option>
                        <option value="srabonwakeupict@gmail.com">srabonwakeupict@gmail.com</option>
                        <option value="reyazaulislam@gmail.com">reyazaulislam@gmail.com</option>
                        <option value="absiddiquehc@gmail.com">absiddiquehc@gmail.com</option>
                        <option value="type2prodhan@gmail.com">type2prodhan@gmail.com</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea type="text" class="form-control" name="body"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
