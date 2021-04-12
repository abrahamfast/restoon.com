<?php


namespace App\Services;


use Illuminate\Database\Eloquent\Model;

class ScrapperServices
{
    protected Model $model;
    protected string $category;
    protected string $cover;
    protected array $entity;

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function save()
    {
        return $this->getModel()->create(
            $this->getEntity()
        );
    }


    /**
     * @param string $cover
     * @return ScrapperServices
     */
    public function setCover(string $cover): ScrapperServices
    {
        $this->cover = $cover;
        return $this;
    }

    /**
     * @return Model
     */
    public function getModel(): Model
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getCover(): string
    {
        return $this->cover;
    }

    public function setEntity($data)
    {
        $this->entity = $data;
    }

    /**
     * @return array
     */
    public function getEntity(): array
    {
        return $this->entity;
    }
}
