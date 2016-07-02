<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientCredit
 *
 * @author sam
 */
class ClientCredit extends Client{

    function creerCommande($montant) {
        return new CommandeCredit($montant);
    }
}
