<?php
namespace App\Services;
use App\Entity\Client;
use App\Repository\ClientRepository;

  class Clients extends Toto
{

  public function __construct(ClientRepository $repo)
  {
    $this->table= Client::class;
    $this->repo=$repo;
  }

  /**
   * Cette méthode construit les données d'une table et les 
   * l'enregistre
   * @param array $data
   * @return void
   */
    public function create(array $data)
    {
      $table= new $this->table;
      $table->setNom($data["nom"]);
      $table->setContact($data["contact"]);
       
      $this->save($table);
    }

    public function updateClient(array $data)
    {
      $data['client']->setNom($data["nom"]);
      $data['client']->setContact($data["contact"]);
       
      $this->update();
    }
        
    
}
