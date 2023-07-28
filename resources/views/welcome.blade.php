@extends('layouts.global-layouts')

@section('contenu')
 <div class="row">
    <div class="col-sm-4">
        formulaire
        <form action="">
            <div class="form-group">
                <label>select</label>
                <select class="form-control form-control-lg">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group">
                <label>Input</label>
                <input type="text" class="form-control form-control-sm">
              </div>
              <div class="form-group">
                <label>Large select</label>
                <select class="form-control form-control-lg">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
        </form>
    </div>
    </div>
 </div>
@endsection
