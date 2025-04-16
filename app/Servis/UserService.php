<?php

namespace Importa\Furnic\PHP\FFI\Servis;

use Importa\Furnic\PHP\FFI\Config\Database;
use Importa\Furnic\PHP\FFI\Domain\User;
use Importa\Furnic\PHP\FFI\Exception\ValidationException;
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

    public function register(UserRegisterRequest $request): UserRegisterResponse
    {
        $this->validateUserRegisterRequest($request);

        try {
            Database::beginTransaction();
            $user = $this->userRepository->findByUsername($request->username);
            if ($user != null) {
                throw new ValidationException("Username already exists");
            }
    
            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
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


    public function validateUserRegisterRequest(UserRegisterRequest $request): void
    {
        if ($request->username == null || $request->username == "") {
            throw new ValidationException("Username is required");
        }
        if ($request->email == null || $request->email == "") {
            throw new ValidationException("Email is required");
        }
        if ($request->password == null || $request->password == "") {
            throw new ValidationException("Password is required");
        }
        if (strlen($request->password) < 8) {
            throw new ValidationException("Password must be at least 8 characters long");
        }
    }

    public function login (UserLoginRequest $request): UserLoginResponse {
        $this->validateUserLoginRequest($request);

        $user = $this->userRepository->findByUsername($request->username);
        if ($user == null) {
            throw new ValidationException("Username or password is incorrect");
        }

        if (!password_verify($request->password, $user->password)) {
            throw new ValidationException("Username or password is incorrect");
        }

        $response = new UserLoginResponse();
        $response->user = $user;
        return $response;
    }

    private function validateUserLoginRequest(UserLoginRequest $request): void
    {
        if ($request->username == null || $request->username == "") {
            throw new ValidationException("Username is required");
        }
        if ($request->password == null || $request->password == "") {
            throw new ValidationException("Password is required");
        }
    }
}