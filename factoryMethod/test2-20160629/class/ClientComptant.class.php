<?php


class ClientComptant extends Client{
    protected function creerCommande($montant) {
        
        return new CommandeComptant($montant);
    }

}
