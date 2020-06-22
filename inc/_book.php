<!-- Begin booking popup -->
<div id="bookingPopup" class="popup-wrap">
		    <div class="form-popup popup-inside mfp-with-anim">
		        <div class="form-popup-inside mfp-inside">
		            <button class="close" aria-label="Close" data-dismiss="modal">
		                <svg class="icon icon-close" width="20" height="21" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
		                    <path d="M9.04297 10.1921L0.195312 19.0398C0.0651042 19.157 0 19.3002 0 19.4695C0 19.6518 0.0651042 19.8015 0.195312 19.9187C0.260417 19.9838 0.325521 20.0294 0.390625 20.0554C0.46875 20.0945 0.553385 20.114 0.644531 20.114C0.722656 20.114 0.800781 20.0945 0.878906 20.0554C0.957031 20.0294 1.02214 19.9838 1.07422 19.9187L10 11.0125L18.9258 19.9187C18.9779 19.9838 19.043 20.0294 19.1211 20.0554C19.1992 20.0945 19.2773 20.114 19.3555 20.114C19.4466 20.114 19.5312 20.0945 19.6094 20.0554C19.6875 20.0294 19.7526 19.9838 19.8047 19.9187C19.9349 19.8015 20 19.6518 20 19.4695C20 19.3002 19.9349 19.157 19.8047 19.0398L10.957 10.1921L19.8242 1.32495C19.9414 1.20776 20 1.06453 20 0.895264C20 0.712972 19.9414 0.556722 19.8242 0.426514C19.694 0.309326 19.5378 0.250732 19.3555 0.250732C19.1862 0.250732 19.043 0.309326 18.9258 0.426514L10 9.35229L1.07422 0.426514C0.957031 0.309326 0.807292 0.250732 0.625 0.250732C0.455729 0.250732 0.30599 0.309326 0.175781 0.426514C0.0585938 0.556722 0 0.712972 0 0.895264C0 1.06453 0.0585938 1.20776 0.175781 1.32495L9.04297 10.1921Z"></path>
		                </svg>
		            </button>
		            <h3 class="text-center">Reserver</h3>
		            <form action="#" class="book-form" novalidate="novalidate">
		                <div class="tt-form-row">
		                    <span class="tt-form-control tt-form-control_33">
		                        <input type="text" name="name" placeholder="Ton Nom*" required>
		                    </span>
							<span class="tt-form-control tt-form-control_33">
		                        <input type="text" name="blaze" placeholder="Ton Blaze*" required>
		                    </span>
		                    <span class="tt-form-control tt-form-control_33">
		                        <input type="email" name="email" placeholder="Ton Mail *" required>
		                    </span>
		                    <span class="tt-form-control tt-form-control_33">
		                        <input type="tel" name="Telephone" placeholder="Ton Numero *" required>
		                    </span>
		                </div>
		                <div class="tt-form-row">
		                    <span class="tt-form-control tt-form-control_66">
		                        <input type="text" name="Ville" placeholder="Tu viens de quelle Ville ?">
		                    </span>
		                    <span class="tt-form-control tt-form-control_33">
		                        <span class="selectWrapper">
		                            <select name="my-select-country" class="tt-custom-select form-control">
		                                <option value=" Cotes D'Armor ">Cotes d'Armor(22)</option>
		                                <option value="Ile et Vilaine">Ile et Vilaine(35)</option>
		                                <option value="Finistere">Finistere(29)</option>
										<option value="Morbihan">Morbihan(56)</option>
		                                
		                            </select>
		                        </span>
		                    </span>
		                </div>
		                <div class="tt-form-row">
		                    <div class="tt-form-control tt-form-control_66">
		                        <div class="tt-form-control_inner">
		                            <div class="add-control"></div>
		                            <div class="control-wrap">
		                                <label for="select-service">Prestation :</label>
		                                <span class="selectWrapper">
		                                    <select name="my-select-service" class="tt-custom-select form-control" id="select-service">
		                                        <option value="Prise De Son">Prise De Son</option>
		                                        <option value="Mixage">Mixage</option>
		                                        <option value="Mastering">Mastering</option>
												<option value="repetition">Repetition</option>
		                                        <option value="Accompagnement Artistique">Accompagnement Artistique</option>
		                                    </select>
		                                </span>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="tt-form-control tt-form-control_33">
		                        <div class="tt-form-row">
		                            <span class="tt-form-control tt-form-control_40">
		                                <label for="select-time">Temps:</label>
		                                <span class="selectWrapper">
		                                    <select name="my-select-time" class="tt-custom-select form-control" id="select-time">
		                                        <option value="1 Heure">1 Heure</option>
		                                        <option value="2 Heure">2 Heures</option>
		                                        <option value="4 Heure">4 Heures</option>
		                                        <option value="6 Heure">6 Heures</option>
												<option value="8 Heure">8 Heures</option>
												<option value="demi-journee">Demi-Journée</option>
												<option value="Journee">Journée</option>

		                                    </select>
		                                </span>
		                            </span>
		                            <span class="tt-form-control tt-form-control_60">
		                                <label for="date">Date:</label>
		                                <span class="date-input">
		                                    <input type="text" name="date" class="datetimepicker valid" id="date" autocomplete="off" placeholder="Date de reservation" readonly>
		                                    <svg width="20" height="20" class="input-ico" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.6562 1.5625H16.7188V0H15.1562V1.5625H4.84375V0H3.28125V1.5625H2.34375C1.05141 1.5625 0 2.61391 0 3.90625V17.6562C0 18.9486 1.05141 20 2.34375 20H17.6562C18.9486 20 20 18.9486 20 17.6562V3.90625C20 2.61391 18.9486 1.5625 17.6562 1.5625ZM18.4375 17.6562C18.4375 18.087 18.087 18.4375 17.6562 18.4375H2.34375C1.91297 18.4375 1.5625 18.087 1.5625 17.6562V7.34375H18.4375V17.6562ZM18.4375 5.78125H1.5625V3.90625C1.5625 3.47547 1.91297 3.125 2.34375 3.125H3.28125V4.6875H4.84375V3.125H15.1562V4.6875H16.7188V3.125H17.6562C18.087 3.125 18.4375 3.47547 18.4375 3.90625V5.78125Z"/><path d="M4.53125 8.98438H2.96875V10.5469H4.53125V8.98438Z"/><path d="M7.65625 8.98438H6.09375V10.5469H7.65625V8.98438Z"/><path d="M10.7812 8.98438H9.21875V10.5469H10.7812V8.98438Z"/><path d="M13.9062 8.98438H12.3438V10.5469H13.9062V8.98438Z"/><path d="M17.0312 8.98438H15.4688V10.5469H17.0312V8.98438Z"/><path d="M4.53125 12.1094H2.96875V13.6719H4.53125V12.1094Z"/><path d="M7.65625 12.1094H6.09375V13.6719H7.65625V12.1094Z"/><path d="M10.7812 12.1094H9.21875V13.6719H10.7812V12.1094Z"/><path d="M13.9062 12.1094H12.3438V13.6719H13.9062V12.1094Z"/><path d="M4.53125 15.2344H2.96875V16.7969H4.53125V15.2344Z"/><path d="M7.65625 15.2344H6.09375V16.7969H7.65625V15.2344Z"/><path d="M10.7812 15.2344H9.21875V16.7969H10.7812V15.2344Z"/><path d="M13.9062 15.2344H12.3438V16.7969H13.9062V15.2344Z"/><path d="M17.0312 12.1094H15.4688V13.6719H17.0312V12.1094Z"/></svg>
		                                </span>
		                            </span>
		                        </div>
		                    </div>
		                </div>
		                <button type="submit" class="button white btn-border">
		                <svg class="icon icon-mic" width="14" height="16" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg"><path d="M3.6425 0C3.205 0 2.78833 0.0885417 2.3925 0.265625C1.99667 0.432292 1.65292 0.661458 1.36125 0.953125C1.06958 1.24479 0.835208 1.58854 0.658125 1.98438C0.491458 2.36979 0.408125 2.78646 0.408125 3.23438C0.408125 3.68229 0.491458 4.10417 0.658125 4.5C0.835208 4.89583 1.06958 5.23958 1.36125 5.53125C1.65292 5.82292 1.99667 6.05208 2.3925 6.21875C2.78833 6.38542 3.205 6.46875 3.6425 6.46875C4.09042 6.46875 4.51229 6.38542 4.90812 6.21875C5.30396 6.05208 5.64771 5.82292 5.93937 5.53125C6.23104 5.23958 6.46021 4.89583 6.62687 4.5C6.80396 4.10417 6.8925 3.68229 6.8925 3.23438C6.8925 2.78646 6.80396 2.36979 6.62687 1.98438C6.46021 1.58854 6.23104 1.24479 5.93937 0.953125C5.64771 0.661458 5.30396 0.432292 4.90812 0.265625C4.51229 0.0885417 4.09042 0 3.6425 0ZM5.06437 7.15625L10.9237 12.1406L12.3925 10.625L7.40812 4.85938C7.04354 5.54688 6.55917 6.10417 5.955 6.53125C5.36125 6.94792 5.06437 7.15625 5.06437 7.15625ZM13.2831 11.7656L12.705 10.9844L11.3456 12.4062L12.1269 12.9375L13.2831 11.7656ZM13.58 12.2344L12.5175 13.2656L13.0331 13.3594C13.0644 13.5052 13.08 13.7396 13.08 14.0625C13.0904 14.375 13.0071 14.6562 12.83 14.9062C12.705 15.0625 12.5383 15.1823 12.33 15.2656C12.1321 15.349 11.8925 15.3958 11.6112 15.4062C10.4237 15.4375 9.54354 15.3646 8.97062 15.1875C8.40812 15.0208 7.80396 14.5885 7.15812 13.8906C6.77271 13.4844 6.34042 13.1875 5.86125 13C5.38208 12.8125 4.92375 12.6927 4.48625 12.6406C4.05917 12.5781 3.68937 12.5573 3.37687 12.5781C3.07479 12.5885 2.90812 12.599 2.87687 12.6094C2.80396 12.6198 2.74146 12.6562 2.68937 12.7188C2.63729 12.7812 2.61646 12.8542 2.62687 12.9375C2.63729 13.0104 2.67375 13.0729 2.73625 13.125C2.79875 13.1771 2.87167 13.1979 2.955 13.1875C2.96542 13.1875 3.10604 13.1771 3.37687 13.1562C3.64771 13.1354 3.97583 13.151 4.36125 13.2031C4.74667 13.2552 5.15292 13.3594 5.58 13.5156C6.0175 13.6719 6.39771 13.9271 6.72062 14.2812C7.39771 15.0104 8.02792 15.4792 8.61125 15.6875C9.205 15.8958 9.97062 16 10.9081 16C11.0123 16 11.1269 16 11.2519 16C11.3769 16 11.5019 15.9948 11.6269 15.9844C12.0019 15.9844 12.33 15.9219 12.6112 15.7969C12.8925 15.6719 13.1217 15.4896 13.2987 15.25C13.5071 14.9583 13.6217 14.6458 13.6425 14.3125C13.6737 13.9792 13.6737 13.6979 13.6425 13.4688L13.7519 13.4844L13.58 12.2344Z"></path></svg>Réserver Maitenant </button>
		            </form>
		        </div>
		    </div>
		</div>