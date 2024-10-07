<?php

namespace App\Services\Web;

use App\Repositories\Contracts\ImageRepository;
use App\Repositories\Contracts\ProductRepository;
use App\Services\Contracts\ImageServiceInterface;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\Log;

/**
 * Class ImageService.
 */
class ImageService implements ImageServiceInterface
{
    use FileTrait;

    protected $repository;

    protected $productRepository;

    public function __construct(
        ImageRepository $repository,
        ProductRepository $productRepository,
    ) {
        $this->repository = $repository;
        $this->productRepository = $productRepository;
    }

    public function storeMultiple($request, $productId)
    {
        try {
            $images = [];
            $product = $this->productRepository->find($productId);
            if ($request->hasFile('product_images')) {
                foreach ($request->file('product_images') as $image) {
                    $path = $this->upload($image, IMAGE['STORAGE_PATH']);
                    $images[] = [
                        'url' => $path,
                    ];
                }
                $this->repository->storeImages($product, $images);
            }
        } catch (\Exception $e) {
            // Log the error or handle it
            Log::error('Lỗi tải tệp: ' . $e->getMessage());

            return false;
        }

        return true;
    }
}
