
            <nav class="navbar navbar-expand-lg navbar-light bg-sociprodd-bleueclaire px-4 px-lg-5 py-2 py-lg-0">
                <!-- Bouton de Menu -->
                <div class="menu-toggle align-items-center d-flex gap-3 me-4">
                    <button id="menuToggle" class="bg-sociprodd-jaune text-sociprodd-bleuefoncee br-sociprodd-1 bdr-sociprodd-all-bleuefoncee">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
                        </svg>
                    </button>

                    <!-- Pour Téléphone -->
                    <span class="text-sociprodd-blanc d-block d-lg-none">Menu</span>
                    
                    <!-- Pour Ordinateur -->
                    <span class="text-menu d-none d-lg-block">Menu</span>
                </div>


                <a href="https://sociprodd.org" class="bestP d-flex">
                    <img src="/principale/public/assets/images/Logo-SOCIPRODD.png" alt="Logo" width="79px" height="79px">
                </a>

                <!-- Superposition sombre -->
                <div id="overlaywindow" class="overlaywindow"></div>

                <!-- Menu -->
                <div id="menu" class="menu-container">
                    <div class="menu-header">
                        <img src="/principale/public/assets/images/Logo-SOCIPRODD.png" alt="Logo SOCIPRODD" class="menu-logo">
                        <button id="menuClose" class="btn-close-window">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                                <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 10.5858L9.17157 7.75736L7.75736 9.17157L10.5858 12L7.75736 14.8284L9.17157 16.2426L12 13.4142L14.8284 16.2426L16.2426 14.8284L13.4142 12L16.2426 9.17157L14.8284 7.75736L12 10.5858Z"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="menu-body">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <a href="{{ route('actualites') }}" class="text-sociprodd-bleuefoncee d-flex align-items-center">
                                    Actualités
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="ms-2">
                                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('podcasts') }}" class="text-sociprodd-bleuefoncee d-flex align-items-center">
                                    Podcasts
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="ms-2">
                                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-6 mb-3">
                                <a href="{{ route('reportages') }}" class="text-sociprodd-bleuefoncee d-flex align-items-center">
                                    Reportages
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="ms-2">
                                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('missions') }}" class="text-sociprodd-bleuefoncee d-flex align-items-center">
                                    Missions
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="ms-2">
                                        <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        
                        <div class="menu-section">
                            <strong><a href="{{ route('ce-que-nous-faisons.acceuil') }}" class="text-sociprodd-bleuefoncee">Ce que nous faison</a></strong>
                            <ul>
                                @if(isset($educationjuridique))
                                    <li><a href="{{ route('ce-que-nous-faisons.education-juridique') }}" class="text-sociprodd-bleueclaire">Promouvoir l'éducation juridique <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="me-2"><path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path></svg></a></li>
                                @else
                                    <li><a href="{{ route('ce-que-nous-faisons.education-juridique') }}" class="text-sociprodd-bleuefoncee">Promouvoir l'éducation juridique <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="me-2"><path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path></svg></a></li>
                                @endif

                                
                                @if(isset($droitslibertevulnerable))
                                    <li><a href="{{ route('ce-que-nous-faisons.droits-liberte-vulnerable') }}" class="text-sociprodd-bleueclaire">Promouvoir et défendre les droits humains et les libertés et particulièrement ceux des personnes vulnérables<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="me-2"><path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path></svg></a></li>
                                @else
                                    <li><a href="{{ route('ce-que-nous-faisons.droits-liberte-vulnerable') }}" class="text-sociprodd-bleuefoncee">Promouvoir et défendre les droits humains et les libertés et particulièrement ceux des personnes vulnérables<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="me-2"><path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path></svg></a></li>
                                @endif


                                @if(isset($femmeminoritegenre))
                                    <li><a href="{{ route('ce-que-nous-faisons.femmes-minorites-genre') }}" class="text-sociprodd-bleueclaire">Promouvoir les droits des femmes , les droits des minorités et l'égalité de genre<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="me-2"><path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path></svg></a></li>
                                @else
                                    <li><a href="{{ route('ce-que-nous-faisons.femmes-minorites-genre') }}" class="text-sociprodd-bleuefoncee">Promouvoir les droits des femmes , les droits des minorités et l'égalité de genre<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="me-2"><path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path></svg></a></li>
                                @endif
                                
                                
                                @if(isset($inclusionsautomatisation))
                                    <li><a href="{{ route('ce-que-nous-faisons.inclusions-automatisation') }}" class="text-sociprodd-bleueclaire">Favoriser l'inclusion et l'autonomisation des couches sociales défavorisées<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="me-2"><path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path></svg></a></li>
                                @else
                                    <li><a href="{{ route('ce-que-nous-faisons.inclusions-automatisation') }}" class="text-sociprodd-bleuefoncee">Favoriser l'inclusion et l'autonomisation des couches sociales défavorisées<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="me-2"><path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path></svg></a></li>
                                @endif

                                
                                @if(isset($gouvernancedeveloppement))
                                    <li><a href="{{ route('ce-que-nous-faisons.gouvernance-developpement') }}" class="text-sociprodd-bleueclaire">Promouvoir la bonne gouvernance et le développement social<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="me-2"><path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path></svg></a></li>
                                @else
                                    <li><a href="{{ route('ce-que-nous-faisons.gouvernance-developpement') }}" class="text-sociprodd-bleuefoncee">Promouvoir la bonne gouvernance et le développement social<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="me-2"><path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path></svg></a></li>
                                @endif
                                
                                
                                @if(isset($environnementinfrastructure))
                                    <li><a href="{{ route('ce-que-nous-faisons.environnement-infrastructure-publique') }}" class="text-sociprodd-bleueclaire">Protection de l’environnement et infrastructure publique<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="me-2"><path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path></svg></a></li>
                                @else
                                    <li><a href="{{ route('ce-que-nous-faisons.environnement-infrastructure-publique') }}" class="text-sociprodd-bleuefoncee">Protection de l’environnement et infrastructure publique<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="me-2"><path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path></svg></a></li>
                                @endif
                            
                            </ul>
                        </div>

                        <div class="menu-section">
                            <strong><a href="{{ route('decouvrir-sociprodd.acceuil') }}" class="text-sociprodd-bleuefoncee">Découvrir SOCIPRODD</a> </strong>
                            <div class="row me-2 mt-3">
                                <div class="col-6 mb-3">
                                    <a href="{{ route('decouvrir-sociprodd.organisation') }}" class="text-sociprodd-bleuefoncee d-flex align-items-center">
                                        L'organisation 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="ms-2">
                                            <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                        </svg>
                                    </a>
                                    
                                </div>
                                <div class="col-6 mb-3">
                                    <a href="{{ route('decouvrir-sociprodd.contacts') }}" class="text-sociprodd-bleuefoncee d-flex align-items-center">
                                        Contacts
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="ms-2">
                                            <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 mb-3">
                                    <a href="{{ route('decouvrir-sociprodd.localisation') }}" class="text-sociprodd-bleuefoncee d-flex align-items-center">
                                        Localisation 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="ms-2">
                                            <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 mb-3">
                                    <a href="{{ route('decouvrir-sociprodd.bilan') }}" class="text-sociprodd-bleuefoncee d-flex align-items-center">
                                        Bilan 2023 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="ms-2">
                                            <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="menu-section">
                            <strong><a href="{{ route('agir-avec-nous.acceuil') }}" class="text-sociprodd-bleuefoncee">Agir avec nous</a></strong>
                            <div class="row me-2 mt-3">
                                <div class="col-6 mb-3">
                                    <a href="{{ route('agir-avec-nous.newsletter') }}" class="text-sociprodd-bleuefoncee d-flex align-items-center">
                                        Newsletter
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="ms-2">
                                            <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 mb-3">
                                    <a href="{{ route('agir-avec-nous.projets') }}" class="text-sociprodd-bleuefoncee d-flex align-items-center">
                                        Projets 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="ms-2">
                                            <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 mb-3">
                                    <a href="{{ route('agir-avec-nous.devenir-membre') }}" class="text-sociprodd-bleuefoncee d-flex align-items-center">
                                        Membres 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="ms-2">
                                            <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col-6 mb-3">
                                    <a href="" class="text-sociprodd-bleuefoncee d-flex align-items-center">
                                        Recrutements
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)" class="ms-2">
                                            <path d="M12 13H4V11H12V4L20 12L12 20V13Z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="collapse navbar-collapse" id="navbarCollapse">

                    <!-- Pour Ordinateur -->
                    <div class="navbar-nav ms-auto py-0">
                            
                        @if(isset($ceQueNousFaisons))
                            <a href="{{ route('ce-que-nous-faisons.acceuil') }}" class="d-none d-lg-block nav-item nav-link active">Ce que nous faisons</a>
                        @else
                            <a href="{{ route('ce-que-nous-faisons.acceuil') }}" class="d-none d-lg-block nav-item nav-link">Ce que nous faisons</a>
                        @endif

                        @if(isset($activeDecouvrirSociprodd))
                            <a href="{{ route('decouvrir-sociprodd.acceuil') }}" class="d-none d-lg-block nav-item nav-link active">Découvrir SOCIPRODD</a>
                        @else
                            <a href="{{ route('decouvrir-sociprodd.acceuil') }}" class="d-none d-lg-block nav-item nav-link">Découvrir SOCIPRODD</a>
                        @endif

                        
                        @if(isset($activeAgirAvecNous))
                            <a href="{{ route('agir-avec-nous.acceuil') }}" class="d-none d-lg-block nav-item nav-link active">Agir avec nous</a>
                        @else
                            <a href="{{ route('agir-avec-nous.acceuil') }}" class="d-none d-lg-block nav-item nav-link">Agir avec nous</a>
                        @endif

                        <!-- Pour Ordinateur -->
                        <a href="https://pays.sociprodd.org" target="_blank" class="d-none d-lg-block nav-item nav-link" style="margin-left: 5em;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM16.0043 12.8777C15.6589 12.3533 15.4097 11.9746 14.4622 12.1248C12.6717 12.409 12.4732 12.7224 12.3877 13.2375L12.3636 13.3943L12.3393 13.5597C12.2416 14.2428 12.2453 14.5012 12.5589 14.8308C13.8241 16.1582 14.582 17.115 14.8116 17.6746C14.9237 17.9484 15.2119 18.7751 15.0136 19.5927C16.2372 19.1066 17.3156 18.3332 18.1653 17.3559C18.2755 16.9821 18.3551 16.5166 18.3551 15.9518V15.8472C18.3551 14.9247 18.3551 14.504 17.7031 14.1314C17.428 13.9751 17.2227 13.881 17.0582 13.8064C16.691 13.6394 16.4479 13.5297 16.1198 13.0499C16.0807 12.9928 16.0425 12.9358 16.0043 12.8777ZM12 3.83333C9.68259 3.83333 7.59062 4.79858 6.1042 6.34896C6.28116 6.47186 6.43537 6.64453 6.54129 6.88256C6.74529 7.34029 6.74529 7.8112 6.74529 8.22764C6.74488 8.55621 6.74442 8.8672 6.84992 9.09302C6.99443 9.40134 7.6164 9.53227 8.16548 9.64736C8.36166 9.68867 8.56395 9.73083 8.74797 9.78176C9.25405 9.92233 9.64554 10.3765 9.95938 10.7412C10.0896 10.8931 10.2819 11.1163 10.3783 11.1717C10.4286 11.1356 10.59 10.9608 10.6699 10.6735C10.7307 10.4547 10.7134 10.2597 10.6239 10.1543C10.0648 9.49445 10.0952 8.2232 10.268 7.75495C10.5402 7.01606 11.3905 7.07058 12.012 7.11097C12.2438 7.12589 12.4626 7.14023 12.6257 7.11976C13.2482 7.04166 13.4396 6.09538 13.575 5.91C13.8671 5.50981 14.7607 4.9071 15.3158 4.53454C14.3025 4.08382 13.1805 3.83333 12 3.83333Z"></path></svg>
                            Site mondial
                        </a>
                    </div>

                    <a href="#" class="d-none d-lg-block br-sociprodd-1 bg-sociprodd-jaune text-sociprodd-bleuefoncee py-2 px-4 my-3 my-lg-0 flex-shrink-0 d-none d-lg-block">Donner</a>
                 
                </div>
            </nav>

            <!-- Pour Téléphone -->
            <div class="d-block d-lg-none">
                <div class="d-flex justify-content-between align-items-center bg-sociprodd-bleuefoncee py-2 px-3">

                    <a href="https://pays.sociprodd.org" target="_blank" class="text-sociprodd-blanc">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(218,202,12,1)"><path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM16.0043 12.8777C15.6589 12.3533 15.4097 11.9746 14.4622 12.1248C12.6717 12.409 12.4732 12.7224 12.3877 13.2375L12.3636 13.3943L12.3393 13.5597C12.2416 14.2428 12.2453 14.5012 12.5589 14.8308C13.8241 16.1582 14.582 17.115 14.8116 17.6746C14.9237 17.9484 15.2119 18.7751 15.0136 19.5927C16.2372 19.1066 17.3156 18.3332 18.1653 17.3559C18.2755 16.9821 18.3551 16.5166 18.3551 15.9518V15.8472C18.3551 14.9247 18.3551 14.504 17.7031 14.1314C17.428 13.9751 17.2227 13.881 17.0582 13.8064C16.691 13.6394 16.4479 13.5297 16.1198 13.0499C16.0807 12.9928 16.0425 12.9358 16.0043 12.8777ZM12 3.83333C9.68259 3.83333 7.59062 4.79858 6.1042 6.34896C6.28116 6.47186 6.43537 6.64453 6.54129 6.88256C6.74529 7.34029 6.74529 7.8112 6.74529 8.22764C6.74488 8.55621 6.74442 8.8672 6.84992 9.09302C6.99443 9.40134 7.6164 9.53227 8.16548 9.64736C8.36166 9.68867 8.56395 9.73083 8.74797 9.78176C9.25405 9.92233 9.64554 10.3765 9.95938 10.7412C10.0896 10.8931 10.2819 11.1163 10.3783 11.1717C10.4286 11.1356 10.59 10.9608 10.6699 10.6735C10.7307 10.4547 10.7134 10.2597 10.6239 10.1543C10.0648 9.49445 10.0952 8.2232 10.268 7.75495C10.5402 7.01606 11.3905 7.07058 12.012 7.11097C12.2438 7.12589 12.4626 7.14023 12.6257 7.11976C13.2482 7.04166 13.4396 6.09538 13.575 5.91C13.8671 5.50981 14.7607 4.9071 15.3158 4.53454C14.3025 4.08382 13.1805 3.83333 12 3.83333Z"></path></svg>
                        Site mondial
                    </a>

                    <a href="#" class="br-sociprodd-1 bg-sociprodd-jaune text-sociprodd-bleuefoncee p-2 px-3">Donner</a>
                </div>
            </div>