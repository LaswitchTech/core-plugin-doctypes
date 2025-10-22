<?php

// Import additionnal class into the global namespace
use \LaswitchTech\Core\Base\BaseModel;

class DoctypesModel extends BaseModel {

    /**
     * Constructor
     */
    public function __construct()
    {
        // Call the parent constructor
        parent::__construct();

        // Initialize the Model
        $this->init('doctypes');
    }

    /**
     * Process a record
     *
     * @param array $record
     * @return array
     */
    protected function process(array $record): array
    {
        // Call the parent constructor
        $record = parent::process($record);

        // Process the JSON fields
        if(!is_array($record['locked'])){
            $record['locked'] = json_decode($record['locked'] ?? "[]", true);
        }
        if(!is_array($record['permissions'])){
            $record['permissions'] = json_decode($record['permissions'] ?? "[]", true);
        }

        // Return the processed record
        return $record;
    }
}
