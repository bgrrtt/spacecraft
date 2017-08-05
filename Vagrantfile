################################################################################
# -*- mode: ruby -*-
# vi: set ft=ruby :
################################################################################
require './operations/config/vagrant.rb'
################################################################################
vconfig = load_config([
        './operations/config/project.yml',
        './operations/config/server.yml'
      ])
################################################################################
Vagrant.configure('2') do |config|

  # Box Image
  config.vm.box = vconfig['vagrant_box']

  # Define VM
  config.vm.define vconfig['vagrant_project']

  # Set IP and Hostname
  config.vm.network :private_network, ip: vconfig['vagrant_ip']
  config.vm.hostname = vconfig['vagrant_host']

  # SSH Configuartion
  config.ssh.insert_key = false

  # Sync Folder
  config.vm.synced_folder '.', '/nfs', type: 'nfs', mount_options: ['rw', 'vers=3', 'tcp', 'fsc' ,'actimeo=2']

  # Sync Bindings
  config.bindfs.bind_folder '/nfs', '/site'
  config.bindfs.bind_folder '/nfs/operations', '/ops'

  # Virtualbox Configuartion
  config.vm.provider :virtualbox do |vb|
    vb.name = vconfig['vagrant_project']
    vb.memory = vconfig['vagrant_mem']
    vb.cpus = vconfig['vagrant_cpu']
    vb.customize ['modifyvm', :id, '--natdnshostresolver1', 'on']
    vb.customize ['modifyvm', :id, '--nictype1', 'virtio' ]
    vb.customize ['modifyvm', :id, '--nictype2', 'virtio' ]
    vb.customize ['modifyvm', :id, '--ioapic', 'on']
    vb.customize ['storagectl', :id, '--name', 'SATA Controller', '--hostiocache', 'on']
  end

  # Provison the VM with Ansible
  config.vm.provision 'ansible_local' do |ansible|
    ansible.provisioning_path = '/ops'
    ansible.playbook = '/ops/playbooks/provision.yml'
    ansible.inventory_path = '/ops/hosts'
    ansible.limit = 'local'
    ansible.version = 'latest'
    ansible.verbose = false
  end

end
################################################################################
