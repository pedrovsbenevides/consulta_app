<?php

namespace App\Repositories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class BaseRepository
{
    private Model $model;
    private Builder $query;

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    public function find(int|string $key): Model
    {
        if (is_int($key)) {

            return $this->findId($key);
        } else if (is_string($key)) {

            return $this->findUuid($key);
        }
    }

    protected function whereId(int $id)
    {
        return $this->query->where('id', $id);
    }

    protected function whereUuid(string $uuid)
    {
        return $this->query->where('uuid', $uuid);
    }

    protected function findId(int $id): Model
    {
        return $this->query->find($id);
    }

    protected function findUuid(string $uuid): Model
    {
        return $this->query->where('uuid', $uuid)->first();
    }

    protected function like(string $fieldName, $value): Builder
    {
        return $this->query->where($fieldName, 'LIKE', '%' . $value . '%');
    }

    protected function where(string $fieldName, $value, $operator = '='): Builder
    {
        return $this->query->where($fieldName, $operator, $value);
    }

    protected function orWhere(string $fieldName, $value, $operator = '='): Builder
    {
        return $this->query->orWhere($fieldName, $operator, $value);
    }

    protected function orLike(string $fieldName, $value): Builder
    {
        return $this->orWhere($fieldName, '%' . $value . '%', 'LIKE');
    }

    protected function greaterOrEqualDate(string $fieldName, string|Carbon $date): Builder
    {
        return $this->query->whereDate($fieldName, $date);
    }

    protected function betweenDates(string $fieldName, string|Carbon $firstDate, string|Carbon $lastDate): Builder
    {
        return $this->greaterOrEqualDate($fieldName, $firstDate)->lessOrEqualDate($fieldName, $lastDate);
    }

    protected function lessOrEqualDate(string $fieldName, string|Carbon $date): Builder
    {
        return $this->query->whereDate($fieldName, $date);
    }

    public function get(array $columns = ['*']): Collection
    {
        return $this->query->get($columns);
    }

    public function all(array $columns = ['*']): Collection
    {
        return $this->model->all($columns);
    }
}
