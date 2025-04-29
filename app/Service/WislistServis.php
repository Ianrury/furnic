<?php

namespace Importa\Furnic\PHP\FFI\Service;

use Importa\Furnic\PHP\FFI\Domain\Product;
use Importa\Furnic\PHP\FFI\Model\ProductRequest;
use Importa\Furnic\PHP\FFI\Model\ProductResponse;
use Importa\Furnic\PHP\FFI\Repository\ProductRepository;
use Importa\Furnic\PHP\FFI\Exception\ValidationException;
use Importa\Furnic\PHP\FFI\Repository\SessionRepository;
use Importa\Furnic\PHP\FFI\Repository\UserRepository;

class WislistServis
{
    private ProductRepository $productRepository;
    public static string $COOKIE_NAME = 'X-FURNIC-SESSION';
    private SessionRepository $sessionRepository;
    private UserRepository $userRepository;

    public function __construct(
        SessionRepository $sessionRepository,
        UserRepository $userRepository,
        ProductRepository $productRepository // ← Tambahkan ini
    ) {
        $this->sessionRepository = $sessionRepository;
        $this->userRepository = $userRepository;
        $this->productRepository = $productRepository; // ← Inisialisasi
    }

    public function createwislist($id_product)
    {

        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;

        // Tambahkan pengecekan null
        if ($sessionId === null) {
            return null;
        }

        $session = $this->sessionRepository->findId($sessionId);
        if ($session == null) {
            return null;
        }

        $id_customer = $this->userRepository->userByIdCustomer($session->id_user);
        if ($id_customer == null) {
            return null;
        }

        return $this->productRepository->Wislist($id_product, $id_customer);
    }

    public function isWishliste($id_product)
    {
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;

        // Tambahkan pengecekan null
        if ($sessionId === null) {
            return null;
        }

        $session = $this->sessionRepository->findId($sessionId);
        if ($session == null) {
            return null;
        }

        $id_customer = $this->userRepository->userByIdCustomer($session->id_user);
        if ($id_customer == null) {
            return null;
        }

        return $this->productRepository->isWishlist($id_product, $id_customer);
    }

    public function removeWishlist($id_product)
    {
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;

        // Tambahkan pengecekan null
        if ($sessionId === null) {
            return null;
        }

        $session = $this->sessionRepository->findId($sessionId);
        if ($session == null) {
            return null;
        }

        $id_customer = $this->userRepository->userByIdCustomer($session->id_user);
        if ($id_customer == null) {
            return null;
        }

        return $this->productRepository->deleteWishlist($id_product, $id_customer);
    }

    public function productWislist()
    {
        $sessionId = $_COOKIE[self::$COOKIE_NAME] ?? null;

        // Tambahkan pengecekan null
        if ($sessionId === null) {
            return null;
        }

        $session = $this->sessionRepository->findId($sessionId);
        if ($session == null) {
            return null;
        }

        $id_customer = $this->userRepository->userByIdCustomer($session->id_user);
        if ($id_customer == null) {
            return null;
        }
        $product = $this->productRepository->productWislist($id_customer);

        return $product;
    }
}

