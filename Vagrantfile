# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  config.vm.box = "bento/ubuntu-18.04"
  config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.network "forwarded_port", guest: 5000, host: 5000
  config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.20.223.203"
  config.vm.hostname="srweb"
  config.vm.provider "virtualbox" do |vb|
    vb.memory = "4096"
	vb.cpus = "2"
    vb.customize ['modifyvm', :id, '--name', 'srweb']
  end
  config.vm.provision "shell", path: "./config/configuracion.sh"
end
