<?php

namespace CIHub\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use CIHub\UserBundle\Entity\User;

class LoadUserData implements FixtureInterface {
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {
        $userSuperAdmin = new User();
        $userSuperAdmin->setUsername('superadmin');
        $userSuperAdmin->setPlainPassword('superadmin');
        $userSuperAdmin->setEmail('superadmin@ci-hub.com');
        $userSuperAdmin->setRoles(['ROLE_SUPER_ADMIN']);
        $userSuperAdmin->setEnabled(true);
        $manager->persist($userSuperAdmin);

        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPlainPassword('admin');
        $userAdmin->setEmail('admin@ci-hub.com');
        $userAdmin->setRoles(['ROLE_ADMIN']);
        $userAdmin->setEnabled(true);
        $manager->persist($userAdmin);

        $userIntegrator = new User();
        $userIntegrator->setUsername('integrator');
        $userIntegrator->setPlainPassword('integrator');
        $userIntegrator->setEmail('integrator@ci-hub.com');
        $userIntegrator->setRoles(['ROLE_INTEGRATOR']);
        $userIntegrator->setEnabled(true);
        $manager->persist($userIntegrator);

        $userMasterIntegrator = new User();
        $userMasterIntegrator->setUsername('masterintegrator');
        $userMasterIntegrator->setPlainPassword('masterintegrator');
        $userMasterIntegrator->setEmail('masterintegrator@ci-hub.com');
        $userMasterIntegrator->setRoles(['ROLE_MASTER_INTEGRATOR']);
        $userMasterIntegrator->setEnabled(true);
        $manager->persist($userMasterIntegrator);

        $userChiefProject = new User();
        $userChiefProject->setUsername('chiefproject');
        $userChiefProject->setPlainPassword('chiefproject');
        $userChiefProject->setEmail('chiefproject@ci-hub.com');
        $userChiefProject->setRoles(['ROLE_PROJECT_CHIEF']);
        $userChiefProject->setEnabled(true);
        $manager->persist($userChiefProject);

        $userTeamLeader = new User();
        $userTeamLeader->setUsername('teamleader');
        $userTeamLeader->setPlainPassword('teamleader');
        $userTeamLeader->setEmail('teamleader@ci-hub.com');
        $userTeamLeader->setRoles(['ROLE_TEAM_LEADER']);
        $userTeamLeader->setEnabled(true);
        $manager->persist($userTeamLeader);

        $manager->flush();
    }
}