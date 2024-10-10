<?php

namespace App\Services\Web;

use App\Repositories\Contracts\ProductDetailRepository;
use App\Services\Contracts\ProductDetailServiceInterface;

/**
 * Class ProductDetailService.
 */
class ProductDetailService implements ProductDetailServiceInterface
{
    protected $repository;

    public function __construct(ProductDetailRepository $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->orderBy('updated_at', 'desc')->all();
    }

    public function store($data)
    {
        return $this->repository->create($data);
    }

    public function storeMultiple($dataProductDetailForm, $productId)
    {
        foreach ($dataProductDetailForm->color_id as $key => $color_id) {
            $data = [
                'product_id' => $productId,
                'color_id' => $color_id,
                'storage_id' => $dataProductDetailForm->storage_id[$key],
                'quantity' => $dataProductDetailForm->qty[$key],
                'price' => $dataProductDetailForm->price[$key],
            ];

            $this->repository->create($data);
        }

        return true;
    }

    public function updateOrCreateMultiple($request, $productId)
    {
        foreach ($request->color_id as $key => $color_id) {
            if (!empty($request->product_detail_id[$key])) {
                $data = [
                    'quantity' => $request->qty[$key],
                    'price' => $request->price[$key],
                ];

                $this->repository->update($data, $request->product_detail_id[$key]);
            } else {
                $data = [
                    'product_id' => $productId,
                    'color_id' => $color_id,
                    'storage_id' => $request->storage_id[$key],
                    'quantity' => $request->qty[$key],
                    'price' => $request->price[$key],
                ];

                $this->repository->create($data);
            }
        }

        return true;
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
