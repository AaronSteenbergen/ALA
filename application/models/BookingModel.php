<?php 
   Class BookingModel extends CI_Model { 
      
      /**
       * public zorgt ervoor dat we vanaf buiten
       * ook bij de variable kunnen. Dus als $data is gevuld
       * kunnen we gebruiken wat erin zit en het in de booking view zetten.
       */
      public $_data = array();
      
      public function __construct() { 
         parent::__construct(); 
      }
      
      /**
       * Hier willen we alles ophalen wat in rooms zit.
       * Zodat we dat weer in een tabel kunnen plaatsen in de booking view.
       */
      public function load() {
         $query = $this->db->get("ala_bookings"); 
         $data['records'] = $query->result();

         $this->_data = $data;

         return $this->_data;
      }

      /**
       * Als we eventueel wat in de database willen gaan zetten.
       */
      public function insert() {
         $data = array(); 
         
         $this->db->insert("ala_bookings", $data);
      }

      /**
       * Als we eventueel wat in de database willen gaan updaten.
       */
      public function update() {
         $data = array(); 
         
         $this->db->set($data); 
         $this->db->where("", ""); 
         $this->db->update("ala_bookings", $data);
      }

      /**
       * Als we eventueel wat in de database willen gaan verwijderen.
       */
      public function delete() {
         $this->db->delete("ala_bookings", "");
      }
   } 
?> 