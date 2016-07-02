<?php


class ClientCredit extends Client {
    protected function creerCommande($montant) {
        return new CommandeCredit($montant);
    }

}
