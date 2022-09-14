@extends('layouts.app')

@section('title')
    Login | SkySema    
@endsection

@section('content')
    <div style = "display: block; background-color: rgb(238, 245, 255); padding: 200px 50px;">
        <div style = "display: flex; flex-direction: row; justify-content: center">
            <div style = "width: 55%; align-items:center; display: flex; flex-direction: row; justify-content:space-between">
                <div>
                    <div><img width="200px" src="{{ url('img/skysema(transparent).png') }}" alt="SkySema"></div>
                    <h2></h2>
                </div>
                <div>
                    <form style = "width:400px; padding: 18px; display:block;background-color:white; border-radius: 7px;box-shadow: 0px 0px 2px 1px rgb(199, 199, 199);" action="">
                        <div>
                            <div>
                                <input placeholder="Электронный адрес или номер телефона" style = " width: 100%;margin-bottom: 10px; padding: 12px 15px;border-radius:7px;border: solid rgb(200, 200, 200) 1px;font-size: 16px; color:rgb(50, 50, 50);" type="text">
                            </div>
                            <div>
                                <input placeholder="Пароль" style = "width: 100%;margin-bottom: 10px; padding: 12px 15px;border-radius:7px;border: solid rgb(200, 200, 200) 1px;font-size: 16px; color:rgb(50, 50, 50);" type="password">
                            </div>
                        </div>
                        <div>
                            <button style = "width: 100%;margin-bottom: 10px; padding: 12px 15px;border-radius:7px;border: solid rgb(200, 200, 200) 1px;cursor: pointer;">Sign in</button>
                        </div>
                        <div>
                            <a href="">Забыли пароль?</a>
                        </div>
                        <div style = "width: 100%; height: 1px; background-color:rgb(190, 190, 190);margin: 20px 0px;"></div>
                        <div>
                            <a href="">Нету аккаунта?</a>
                        </div>
                        <div>
                            <button style = "width: 100%;margin-bottom: 10px; padding: 12px 15px;border-radius:7px;border: solid rgb(200, 200, 200) 1px;cursor: pointer;">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
@endsection