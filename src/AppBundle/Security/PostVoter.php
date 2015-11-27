<?php

namespace AppBundle\Security;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class PostVoter extends Voter
{
    protected function supports($attribute, $subject)
    {
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
    }
}