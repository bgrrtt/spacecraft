<hr>

```

           ███████╗██████╗  █████╗  ██████╗███████╗  ██████╗██████╗  █████╗ ███████╗████████╗   
           ██╔════╝██╔══██╗██╔══██╗██╔════╝██╔════╝ ██╔════╝██╔══██╗██╔══██╗██╔════╝╚══██╔══╝   
           ███████╗██████╔╝███████║██║     █████╗   ██║     ██████╔╝███████║█████╗     ██║      
           ╚════██║██╔═══╝ ██╔══██║██║     ██╔══╝   ██║     ██╔══██╗██╔══██║██╔══╝     ██║      
           ███████║██║     ██║  ██║╚██████╗███████╗ ╚██████╗██║  ██║██║  ██║██║        ██║      
           ╚══════╝╚═╝     ╚═╝  ╚═╝ ╚═════╝╚══════╝  ╚═════╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝        ╚═╝      

```

<hr>

[![GitHub contributors](https://img.shields.io/github/contributors/bgrrtt/spacecraft.svg)](https://github.com/bgrrtt/spacecraft/graphs/contributors) [![CircleCI](https://circleci.com/gh/bgrrtt/spacecraft.svg?style=svg)](https://circleci.com/gh/bgrrtt/spacecraft) [![SensioLabs Insight](https://img.shields.io/sensiolabs/i/703a950d-b8ec-478f-a1dc-82c120743e31.svg)](https://insight.sensiolabs.com/projects/703a950d-b8ec-478f-a1dc-82c120743e31) [![Packagist](https://img.shields.io/packagist/dt/bgrrtt/spacecraft.svg)](https://packagist.org/packages/bgrrtt/spacecraft) [![Gratipay User](https://img.shields.io/gratipay/user/bgrrtt.svg)](https://gratipay.com/SpaceCraft/)

# DevOps for Craft CMS 🚀
A project-based, host-agnostic, and version-controlled development environment that builds and operates cloud-based production environments. Our homesteads may be different, so let's go to [SPACE](https://www.youtube.com/watch?v=S6R3MiAv9ac) together!

## Installation

- `brew install composer`
- `brew cask install vagrant virtualbox`
- `vagrant plugin install vagrant-hostsupdater vagrant-vbguest vagrant-bindfs`



1. `composer create-project bgrrtt/spacecraft NEW_PROJECT` && `cd NEW_PROJECT`
2. `git remote set-url origin git@github.com:USERNAME/NEW_PROJECT_REPO.git
3. Edit `NEW_PROJECT/ops/config/project.yml`.
4. Edit `NEW_PROJECT/ops/config/server.yml`.
5. `vagrant up` && `vagrant ssh`
6. Visit [http://project_local_domain.project_local_domain/admin/install](http://spacecraft.dev/admin/install).
7. Follow this [walkthrough](#) to build and command SpaceCraft cloud infrastructure.<sup>[[1]](#footnote1)</sup>

## Usage

## Roadmap
- Smaller Infrastructure Options (VPC vs. VPS)
- Container Architecture Options with Docker
- FPM Static Page Caching
- Webpack Frontend System
- Progressive Web Application Role
- Preview Environment
- Continuous Integration
- Test All The Things with CircleCI
- Expand providers to Digital Ocean, Vultr, Google Cloud, Azure, Openstack, and Rackspace
- CLI for ansible-playbooks and options
- CLI to prompt `ops/config` settings
- CLI to manage local SpaceCrafts

We are looking for Contributors! Please submit an issue or pull request or find me on the [Craft Slack]().

## Acknowledgements
Thanks to [@pixelandtonic]() and [@khalwat]() for their industry and influence.

Thanks to [@geerlingguy]() for [Ansible for DevOps](), his [Ansible Galaxy Roles](), and [Drupal VM]().

---
**<a name="footnote1"><sup>[1]</sup></a>DISCLAIMER**: It is your responsibility as a web professional to understand and use these tools safely and effectively. It is not the responsibility of, I or, any contributing developer to ensure your usage adheres to industry standards. As such, use this software AT YOUR OWN RISK.
<!-- <a name="footnote2">2</a>: <sup>[2](#footnote2)</sup>
<a name="footnote3">3</a>: <sup>[3](#footnote3)</sup>
<a name="footnote4">4</a>: <sup>[4](#footnote4)</sup>
<a name="footnote5">5</a>: <sup>[5](#footnote5)</sup> -->
