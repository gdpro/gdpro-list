<?php
namespace GdproAcl\Acl\Adapter;

/**
 *
 * @author gary
 *        
 */
Interface AdapterInterface
{

    public function getRole();

    public function getResource();

    public function getPrivilege();

    public function getRoles();

    public function getResources();

    public function getRules();
}
