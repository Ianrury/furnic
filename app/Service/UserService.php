<?php

namespace Importa\Furnic\PHP\FFI\Service;

use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Domain\Customer;
use Importa\Furnic\PHP\FFI\Domain\User;
use Importa\Furnic\PHP\FFI\Exception\ValidationException;
use Importa\Furnic\PHP\FFI\Model\CustomerLoginRequest;
use Importa\Furnic\PHP\FFI\Model\CustomerRegisterRequest;
use Importa\Furnic\PHP\FFI\Model\CustomerRegisterResponse;
use Importa\Furnic\PHP\FFI\Model\UserLoginRequest;
use Importa\Furnic\PHP\FFI\Model\UserLoginResponse;
use Importa\Furnic\PHP\FFI\Model\UserRegisterRequest;
use Importa\Furnic\PHP\FFI\Model\UserRegisterResponse;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;

class UserService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function registerCustomer(CustomerRegisterRequest $request): CustomerRegisterResponse
    {
        $this->validateCustomerRegisterRequest($request);

        try {
            Database::beginTransaction();
            $user = $this->userRepository->findByemail($request->email);
            $customer = $this->userRepository->findByEmailCustomer($request->email);

            if ($user != null || $customer != null) {
                throw new ValidationException("Email Sudah Terdaftar");
            }

            $customer = new Customer();
            $customer->nama = $request->nama;
            $customer->email = $request->email;
            $customer->no_hp = $request->no_hp;
            $customer->alamat = $request->alamat ?? '';
            $customer->kode_pos = $request->kode_pos ?? null;
            $customer->kata_sandi = password_hash($request->kata_sandi, PASSWORD_BCRYPT);
            $this->userRepository->saveCustomer($customer);

            $response = new CustomerRegisterResponse();
            $response->customer = $customer;
            Database::commit();
            return $response;
        } catch (\Exception $e) {
            Database::rollBack();
            throw new ValidationException("Failed to register user: " . $e->getMessage());
        }
    }

    public function register(UserRegisterRequest $request): UserRegisterResponse
    {
        $this->validateUserRegisterRequest($request);

        try {
            Database::beginTransaction();
            $user = $this->userRepository->findByemail($request->email);

            // $customer = $this->userRepository->findByEmailCustomer($request->email);

            if ($user != null) {
                throw new ValidationException("Email Sudah Terdaftar");
            }

            $user = new User();
            $user->nama_user = $request->nama_user;
            $user->no_telpon = $request->no_telpon;
            $user->email = $request->email;
            $user->role_akses = 1;
            $user->jabatan_user = "Admin";
            $user->password = password_hash($request->password, PASSWORD_BCRYPT);
            $this->userRepository->save($user);

            $response = new UserRegisterResponse();
            $response->user = $user;
            Database::commit();
            return $response;
        } catch (\Exception $e) {
            Database::rollBack();
            throw new ValidationException("Failed to register user: " . $e->getMessage());
        }
    }

    public function validateCustomerRegisterRequest(CustomerRegisterRequest $request): void
    {
        if ($request->nama == null || $request->nama == "") {
            throw new ValidationException("Nama User Wajib Diisi");
        }
        if ($request->email == null || $request->email == "") {
            throw new ValidationException("Email Wajib Diisi");
        }
        if ($request->kata_sandi == null || $request->kata_sandi == "") {
            throw new ValidationException("Password Wajib Diisi");
        }
        if (strlen($request->kata_sandi) < 8) {
            throw new ValidationException("Password minimal 8 karakter");
        }
    }

    public function validateUserRegisterRequest(UserRegisterRequest $request): void
    {
        if ($request->nama_user == null || $request->nama_user == "") {
            throw new ValidationException("Nama User Wajib Diisi");
        }
        if ($request->email == null || $request->email == "") {
            throw new ValidationException("Email Wajib Diisi");
        }
        if ($request->password == null || $request->password == "") {
            throw new ValidationException("Password Wajib Diisi");
        }
        if (strlen($request->password) < 8) {
            throw new ValidationException("Password minimal 8 karakter");
        }
    }

    public function login(CustomerLoginRequest $request): CustomerRegisterResponse
    {
        $this->validateCustomerLoginRequest( $request);

        $user = $this->userRepository->findByEmailCustomer($request->email);
        if ($user == null) {
            throw new ValidationException("Username or password is incorrect");
        }

        if (!password_verify($request->kata_sandi, $user->kata_sandi)) {
            throw new ValidationException("Username or password is incorrect");
        }

        $response = new CustomerRegisterResponse();
        $response->customer = $user;
        return $response;
    }

    private function validateCustomerLoginRequest(CustomerLoginRequest $request): void
    {
        if ($request->email == null || $request->email == "") {
            throw new ValidationException("Email is required");
        }
        if ($request->kata_sandi == null || $request->kata_sandi == "") {
            throw new ValidationException("Password is required");
        }
    }

    private function validateUserLoginRequest(UserLoginRequest $request): void
    {
        if ($request->email == null || $request->email == "") {
            throw new ValidationException("Email is required");
        }
        if ($request->password == null || $request->password == "") {
            throw new ValidationException("Password is required");
        }
    }
}
