<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Modules\Core\Http\Controllers\BasePublicController;
use Modules\User\Exceptions\InvalidOrExpiredResetCode;
use Modules\User\Exceptions\UserNotFoundException;
use Modules\User\Http\Requests\LoginRequest;
use Modules\User\Http\Requests\RegisterRequest;
use Modules\User\Http\Requests\ResetCompleteRequest;
use Modules\User\Http\Requests\ResetRequest;
use Modules\User\Services\UserRegistration;
use Modules\User\Services\UserResetter;
use Illuminate\Http\Request;
class AuthController extends BasePublicController
{
    use DispatchesJobs;

    public function __construct()
    {
        parent::__construct();
    }

    public function getLogin()
    {
        return view('user::public.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember = (bool) $request->get('remember_me', false);

        $error = $this->auth->login($credentials, $remember);

        if ($error) {
            return redirect()->back()->withInput()->withError($error);
        }

        return redirect()->intended(route(config('asgard.user.config.redirect_route_after_login')))
                ->withSuccess(trans('user::messages.successfully logged in'));
    }

    public function getRegister()
    {
        return view('user::public.register');
    }

    public function postRegister(RegisterRequest $request)
    {
        // dd($request->all());
        app(UserRegistration::class)->register($request->all());

        return redirect()->route('site.get.login')
        ->withSuccess(trans('Đăng ký thành công. Kiểm tra email để kích hoạt tài khoản'));
        // return redirect()->route('login')
        //     ->withSuccess(trans('user::messages.account created check email for activation'));
    }

    public function getLogout()
    {
        $this->auth->logout();

        return redirect()->route('login');
    }

    public function getActivate($userId, $code)
    {
        if ($this->auth->activate($userId, $code)) {
            return redirect()->route('site.get.login')
            ->withSuccess(trans('Kích hoạt thành công. Bạn có thể đăng nhập ngay'));;
            // return redirect()->route('login')
            //     ->withSuccess(trans('user::messages.account activated you can now login'));
        }
        
        return redirect()->route('site.register')
            ->withError(trans('Có lỗi gì đó'));
        // return redirect()->route('register')
        //     ->withError(trans('user::messages.there was an error with the activation'));
    }

    public function getReset()
    {
        return view('user::public.reset.begin');
    }

    public function postReset(ResetRequest $request)
    {
        try {
            app(UserResetter::class)->startReset($request->all());
        } catch (UserNotFoundException $e) {
            return redirect()->route('site.get.forgotpassword')->withInput()
                ->withError("Không tồn tại email này trong hệ thống");
        }

        return redirect()->route('site.get.login')
            ->withSuccess("Vui lòng kiểm tra Email để cập nhật mật khẩu");
    }

    public function getResetComplete()
    {
        return view('user::public.reset.complete');
    }

    public function postResetComplete($userId, $code, ResetCompleteRequest $request)
    {
        try {
            app(UserResetter::class)->finishReset(
                array_merge($request->all(), ['userId' => $userId, 'code' => $code])
            );
        } catch (UserNotFoundException $e) {
            return redirect()->back()->withInput()
                ->withError(trans('user::messages.user no longer exists'));
        } catch (InvalidOrExpiredResetCode $e) {
            return redirect()->back()->withInput()
                ->withError(trans('user::messages.invalid reset code'));
        }

        return redirect()->route('site.get.login')
            ->withSuccess(trans('user::messages.password reset'));
    }
}
