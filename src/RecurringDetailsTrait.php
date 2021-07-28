<?php

namespace Omnipay\FirstAtlanticCommerce;

trait RecurringDetailsTrait
{
    
    protected function getRecurringTransactionCode(): int
    {
        return $this->getTransactionCode() + ($this->getIsFreeTrial()? TransactionCode::INITIAL_RECURRING_FREE_TRIALS : ($this->getIsSubsequentRecurring() ? TransactionCode::SUBSEQUENT_RECURRING : TransactionCode::INITIAL_RECURRING))            
    }
    
    public function setIsFreeTrial(boolean $value = false) 
    {
        $this->setParameter('IsFreeTrial', $value );
    }
    
    public function getIsFreeTrial() 
    {
       return $this->setParameter('IsFreeTrial');
    }
    
    public function setIsSubsequentRecurring(boolean $value = false) 
    {
        $this->setParameter('IsSubsequentRecurring', $value );
    }
    
    public function getIsSubsequentRecurring() 
    {
       return $this->setParameter('IsSubsequentRecurring');
    }
    
    public function setExecutionDate($value)
    {
        return $this->setParameter('ExecutionDate', $value);
    }

    public function getExecutionDate()
    {
        return $this->getParameter('ExecutionDate');
    }

    public function setIsRecurring(boolean $value = false)
    {
        return $this->setParameter('isRecurring', $value );
    }

    public function getIsRecurring()
    {
        return $this->getParameter('isRecurring');
    }

    public function setFrequency($value = 'M')
    {
        return $this->setParameter('Frequency', $value);
    }

    public function getFrequency()
    {
        return $this->getParameter('Frequency');
    }    
    
    public function setNumberOfRecurrences(int $value)
    {
        return $this->setParameter('NumberOfRecurrences', $value);
    }

    public function getNumberOfRecurrences()
    {
        return $this->getParameter('NumberOfRecurrences');
    }
}
