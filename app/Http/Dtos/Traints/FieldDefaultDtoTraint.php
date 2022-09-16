<?php
namespace App\Http\Dtos\Traints;

trait FieldDefaultDtoTraint
{
    protected ?string $id = null;
    /**
     * setId
     *
     * @param  string $id
     * @return void
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * getId
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }
}