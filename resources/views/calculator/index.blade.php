
@extends('layouts.app')
@section('content')

<form action='{{ route("calculator.store") }}' method = 'POST' class = 'text-center'>
@csrf
    <div class = 'mb-3 mt-3'>
        <input type='number' name='value1' placeholder='Please enter value 1' required>
    </div>
    <div class = 'mb-3'>
        <input type='number' name='value2' placeholder='Please enter value 2' required>
    </div>
    <div class = 'mb-3'>
        <input type='number' name='value3' placeholder='Please enter value 3' required>
    </div>
        
    <select name = 'formula' class="mt-3">
        <option selected>Please choose formula</option>
        <option value='1'>Perimeter of a rectangle</option>
        <option value='2'>The volume of cuboid</option>
        <option value='3'>Area of square</option>
    </select>
    <div class='mt-3'>
        <button type='enter' class='badge bg-success'>Enter</button>
    </div>

</form>




