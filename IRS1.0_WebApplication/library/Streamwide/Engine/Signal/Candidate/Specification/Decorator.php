<?php
/**
 *
 * $Rev: 2088 $
 * $LastChangedDate: 2009-10-30 20:56:54 +0800 (Fri, 30 Oct 2009) $
 * $LastChangedBy: salexandru $
 *
 * @author Stefan ALEXANDRU <salexandru@streamwide.ro>
 * @copyright 2009 Streamwide SAS
 * @package Package
 * @subpackage SubPackage
 * @version 1.0
 *
 */

/**
 * Base class. Allows a notification filter to be satisfied only if the tested candidate is an instance of Streamwide_Engine_Signal
 */
abstract class Streamwide_Engine_Signal_Candidate_Specification_Decorator extends Streamwide_Specification_Decorator
{

    public function isSatisfiedBy( $candidate )
    {
        return ( $candidate instanceof Streamwide_Engine_Signal );
    }
    
}

/* EOF */