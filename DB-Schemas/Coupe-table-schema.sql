CREATE TABLE coupe_data(
  ID_Number INTEGER NOT NULL PRIMARY KEY,
  Make VARCHAR(13) NOT NULL,
  Model VARCHAR(33) NOT NULL,
  Variant VARCHAR(38) NOT NULL,
  ExShowroom_Price INTEGER NOT NULL,
  Fuel_Type VARCHAR(12) NOT NULL,
  Fuel_Tank_Capacity_in_Litres VARCHAR(5) NOT NULL,
  capacity_points INTEGER NOT NULL,
  Displacement_in_cc INTEGER NOT NULL,
  displacement_points INTEGER NOT NULL,
  Cylinders INTEGER NOT NULL,
  No_of_cylinder_points INTEGER NOT NULL,
  Valves_Per_Cylinder INTEGER NOT NULL,
  Valve_point INTEGER NOT NULL,
  Emission_Norm_in_BS VARCHAR(3) NOT NULL,
  emission_points INTEGER NOT NULL,
  ARAI_Certified_Mileage_in_kmlitre NUMERIC(5, 2),
  ARAI_Mileage_Points_liquid INTEGER NOT NULL,
  ARAI_Certified_Mileage_for_CNG_in_kmkg NUMERIC(5, 2) NOT NULL,
  ARAI_Mileage_Points_CNG INTEGER NOT NULL,
  Front_Brakes VARCHAR(15) NOT NULL,
  front_break_points INTEGER NOT NULL,
  Rear_Brakes VARCHAR(15) NOT NULL,
  rear_break_points INTEGER NOT NULL,
  Power_Steering VARCHAR(17) NOT NULL,
  power_steering_point INTEGER NOT NULL,
  Power_Windows VARCHAR(18) NOT NULL,
  power_window_point INTEGER NOT NULL,
  Odometer VARCHAR(15) NOT NULL,
  odometer_point INTEGER NOT NULL,
  Speedometer VARCHAR(15) NOT NULL,
  speedometer_point INTEGER NOT NULL,
  Tripmeter VARCHAR(3) NOT NULL,
  tripmeter_point INTEGER NOT NULL,
  Seats_Material VARCHAR(12) NOT NULL,
  seat_material_point INTEGER NOT NULL,
  Type VARCHAR(9) NOT NULL,
  type_point INTEGER NOT NULL,
  Audio_system VARCHAR(35) NOT NULL,
  audio_system_point INTEGER NOT NULL,
  Bluetooth VARCHAR(3) NOT NULL,
  bluetooth_point BIT NOT NULL,
  Boot_Space_in_L VARCHAR(5) NOT NULL,
  Boot_Space_points INTEGER NOT NULL,
  Fuellid_Opener VARCHAR(35) NOT NULL,
  Fuellid_opener_point INTEGER NOT NULL,
  Bootlid_Opener VARCHAR(29) NOT NULL,
  Bootlid_Opener_points INTEGER NOT NULL,
  Fuel_Gauge VARCHAR(15) NOT NULL,
  Fuel_Guage_points INTEGER NOT NULL,
  Low_Fuel_Warning VARCHAR(3) NOT NULL,
  Low_Fuel_Warning_point BIT NOT NULL,
  Ventilation_System VARCHAR(81) NOT NULL,
  Ventilation_system_points INTEGER NOT NULL,
  Cruise_Control VARCHAR(3) NOT NULL,
  Cruise_Control_points BIT NOT NULL,
  Airbags VARCHAR(263) NOT NULL,
  Airbags_point INTEGER NOT NULL,
  Power_in_PS NUMERIC(9, 5) NOT NULL,
  Power_Points INTEGER NOT NULL,
  torque_in_NM NUMERIC(6, 2) NOT NULL,
  Torque_points INTEGER NOT NULL,
  POINT_SUM INTEGER NOT NULL,
  torque_in_NM_old NUMERIC(6, 2) NOT NULL,
  Drivetrain VARCHAR(23) NOT NULL,
  Cylinder_Configuration VARCHAR(13) NOT NULL,
  Torque VARCHAR(20) NOT NULL,
  Engine_Location VARCHAR(20) NOT NULL,
  Fuel_System VARCHAR(13) NOT NULL,
  Height_in_MM NUMERIC(7, 3) NOT NULL,
  Length_in_MM NUMERIC(6, 2) NOT NULL,
  Width_in_MM NUMERIC(7, 3) NOT NULL,
  Body_Type VARCHAR(19),
  Doors INTEGER,
  City_Mileage_in_kmlitre VARCHAR(9),
  Power VARCHAR(17) NOT NULL,
  Highway_Mileage_in_kmlitre VARCHAR(7),
  Kerb_Weight_in_kg VARCHAR(9),
  Gears VARCHAR(27),
  Ground_Clearance_in_MM NUMERIC(5, 1),
  Front_Suspension VARCHAR(195),
  Rear_Suspension VARCHAR(157),
  Front_Track_in_MM VARCHAR(46),
  Rear_Track_in_MM VARCHAR(21),
  Front_Tyre VARCHAR(54),
  Rim_WR VARCHAR(54),
  RIMS_CORRECT VARCHAR(10),
  Rear_Tyre_Rim VARCHAR(54),
  Power_Seats VARCHAR(16),
  Keyless_Entry VARCHAR(17),
  RPM_PS VARCHAR(7) NOT NULL,
  Tachometer VARCHAR(20),
  Seating_Capacity INTEGER,
  Wheelbase VARCHAR(7),
  Wheels_Size VARCHAR(54),
  Start_Stop_Button VARCHAR(10),
  12v_Power_Outlet VARCHAR(3),
  Auxin_Compatibility VARCHAR(35),
  Average_Fuel_Consumption VARCHAR(42),
  Basic_Warranty VARCHAR(63),
  CD_MP3_DVD_Player VARCHAR(3),
  Central_Locking VARCHAR(3),
  Child_Safety_Locks VARCHAR(7),
  Clock VARCHAR(15),
  Cup_Holders VARCHAR(26),
  Distance_to_Empty VARCHAR(12),
  Door_Pockets VARCHAR(19),
  Engine_Malfunction_Light VARCHAR(138),
  Extended_Warranty VARCHAR(138),
  FM_Radio VARCHAR(3),
  Handbrake VARCHAR(9),
  Instrument_Console VARCHAR(16),
  Minimum_Turning_Radius VARCHAR(11),
  Multifunction_Display VARCHAR(24),
  Sun_Visor VARCHAR(24),
  Third_Row_AC_Vents VARCHAR(31),
  AutoDimming_RearView_Mirror VARCHAR(3),
  Hill_Assist VARCHAR(3),
  Gear_Indicator VARCHAR(3),
  3_Point_SeatBelt_in_Middle_Rear_Seat VARCHAR(3),
  Ambient_Lightning VARCHAR(3),
  CargoBoot_Lights VARCHAR(3),
  Drive_Modes VARCHAR(39),
  Engine_Immobilizer VARCHAR(3),
  High_Speed_Alert_System VARCHAR(3),
  Lane_Watch_Camera_Side_Mirror_Camera VARCHAR(3),
  Passenger_Side_SeatBelt_Reminder VARCHAR(3),
  Seat_Back_Pockets VARCHAR(3),
  Voice_Recognition VARCHAR(3),
  Walk_Away_Auto_Car_Lock VARCHAR(3),
  A_Antilock_Braking_System VARCHAR(3),
  Headlight_Reminder VARCHAR(9),
  Adjustable_Headrests VARCHAR(21),
  Gross_Vehicle_Weight VARCHAR(53),
  Door_Ajar_Warning VARCHAR(3),
  EBD_Electronic_Brakeforce_Distribution VARCHAR(3),
  Fasten_Seat_Belt_Warning VARCHAR(3),
  Gear_Shift_Reminder VARCHAR(3),
  Number_of_Airbags INTEGER,
  Compression_Ratio VARCHAR(12),
  Adjustable_Steering_Column VARCHAR(11),
  Other_Specs VARCHAR(254),
  Other_specs2 VARCHAR(249),
  Parking_Assistance VARCHAR(77),
  Key_Off_Reminder VARCHAR(12),
  USB_Compatibility VARCHAR(3),
  Android_Auto VARCHAR(3),
  Apple_CarPlay VARCHAR(3),
  Cigarette_Lighter VARCHAR(15),
  Infotainment_Screen VARCHAR(28),
  Multifunction_Steering_Wheel VARCHAR(53),
  Average_Speed VARCHAR(28),
  EBA_Electronic_Brake_Assist VARCHAR(19),
  Seat_Height_Adjustment VARCHAR(31),
  Navigation_System VARCHAR(17),
  Second_Row_AC_Vents VARCHAR(3),
  Tyre_Pressure_Monitoring_System VARCHAR(3),
  Rear_Center_Armrest VARCHAR(27),
  iPod_Compatibility VARCHAR(3),
  ESP_Electronic_Stability_Program VARCHAR(3),
  Cooled_Glove_Box VARCHAR(3),
  Recommended_Tyre_Pressure VARCHAR(13),
  Heated_Seats VARCHAR(10),
  Turbocharger VARCHAR(3),
  ISOFIX_ChildSeat_Mount VARCHAR(3),
  Rain_Sensing_Wipers VARCHAR(3),
  Paddle_Shifters VARCHAR(3),
  Leather_Wrapped_Steering VARCHAR(3),
  Automatic_Headlamps VARCHAR(3),
  Engine_Type VARCHAR(145),
  ASR_Traction_Control VARCHAR(11),
  USB_Ports INTEGER,
  HeadsUp_Display VARCHAR(3),
  Welcome_Lights VARCHAR(4),
  Battery VARCHAR(85),
  Electric_Range VARCHAR(40)
);

INSERT INTO
  coupe_data
SELECT
  *
FROM
  Cars_data
WHERE
  Body_Type = 'Coupe';
INSERT INTO Cars_data(ID_Number,Make,Model,Variant,ExShowroom_Price,Fuel_Type,Fuel_Tank_Capacity_in_Litres,capacity_points,Displacement_in_cc,displacement_points,Cylinders,No_of_cylinder_points,Valves_Per_Cylinder,Valve_point,Emission_Norm_in_BS,emission_points,ARAI_Certified_Mileage_in_kmlitre,ARAI_Mileage_Points_liquid,ARAI_Certified_Mileage_for_CNG_in_kmkg,ARAI_Mileage_Points_CNG,Front_Brakes,front_break_points,Rear_Brakes,rear_break_points,Power_Steering,power_steering_point,Power_Windows,power_window_point,Odometer,odometer_point,Speedometer,speedometer_point,Tripmeter,tripmeter_point,Seats_Material,seat_material_point,Type,type_point,Audio_system,audio_system_point,Bluetooth,bluetooth_point,Boot_Space_in_L,Boot_Space_points,Fuellid_Opener,Fuellid_opener_point,Bootlid_Opener,Bootlid_Opener_points,Fuel_Gauge,Fuel_Guage_points,Low_Fuel_Warning,Low_Fuel_Warning_point,Ventilation_System,Ventilation_system_points,Cruise_Control,Cruise_Control_points,Airbags,Airbags_point,Power_in_PS,Power_Points,torque_in_NM,Torque_points,POINT_SUM,torque_in_NM_old,Drivetrain,Cylinder_Configuration,Torque,Engine_Location,Fuel_System,Height_in_MM,Length_in_MM,Width_in_MM,Body_Type,Doors,City_Mileage_in_kmlitre,Power,Highway_Mileage_in_kmlitre,Kerb_Weight_in_kg,Gears,Ground_Clearance_in_MM,Front_Suspension,Rear_Suspension,Front_Track_in_MM,Rear_Track_in_MM,Front_Tyre,Rim_WR,RIMS_CORRECT,Rear_Tyre_Rim,Power_Seats,Keyless_Entry,RPM_PS,Tachometer,Seating_Capacity,Wheelbase,Wheels_Size,Start_Stop_Button,12v_Power_Outlet,Auxin_Compatibility,Average_Fuel_Consumption,Basic_Warranty,CD_MP3_DVD_Player,Central_Locking,Child_Safety_Locks,Clock,Cup_Holders,Distance_to_Empty,Door_Pockets,Engine_Malfunction_Light,Extended_Warranty,FM_Radio,Handbrake,Instrument_Console,Minimum_Turning_Radius,Multifunction_Display,Sun_Visor,Third_Row_AC_Vents,AutoDimming_RearView_Mirror,Hill_Assist,Gear_Indicator,3_Point_SeatBelt_in_Middle_Rear_Seat,Ambient_Lightning,CargoBoot_Lights,Drive_Modes,Engine_Immobilizer,High_Speed_Alert_System,Lane_Watch_Camera_Side_Mirror_Camera,Passenger_Side_SeatBelt_Reminder,Seat_Back_Pockets,Voice_Recognition,Walk_Away_Auto_Car_Lock,A_Antilock_Braking_System,Headlight_Reminder,Adjustable_Headrests,Gross_Vehicle_Weight,Door_Ajar_Warning,EBD_Electronic_Brakeforce_Distribution,Fasten_Seat_Belt_Warning,Gear_Shift_Reminder,Number_of_Airbags,Compression_Ratio,Adjustable_Steering_Column,Other_Specs,Other_specs2,Parking_Assistance,Key_Off_Reminder,USB_Compatibility,Android_Auto,Apple_CarPlay,Cigarette_Lighter,Infotainment_Screen,Multifunction_Steering_Wheel,Average_Speed,EBA_Electronic_Brake_Assist,Seat_Height_Adjustment,Navigation_System,Second_Row_AC_Vents,Tyre_Pressure_Monitoring_System,Rear_Center_Armrest,iPod_Compatibility,ESP_Electronic_Stability_Program,Cooled_Glove_Box,Recommended_Tyre_Pressure,Heated_Seats,Turbocharger,ISOFIX_ChildSeat_Mount,Rain_Sensing_Wipers,Paddle_Shifters,Leather_Wrapped_Steering,Automatic_Headlamps,Engine_Type,ASR_Traction_Control,USB_Ports,HeadsUp_Display,Welcome_Lights,Battery,Electric_Range) VALUES (870,'Lamborghini','Huracan','Evo Spyder',41000000,'Petrol','83',4,5204,8,10,7,4,0,'4',2,10.6,2,0,0,'Ventilated Disc',3,'Ventilated Disc',2,'Hydraulic Power',1,'Only Front Windows',1,'Digital',2,'Digital',2,'Yes',2,'Leather',1,'Automatic',5,'DVD Player with USB & Aux-in',3,'Yes',1,'70',1,'Internal',5,'With Remote, Internal',5,'Analog',1,'Yes',1,'Fully automatic climate control',7,'Yes',1,'Driver frontal airbag, Front passenger frontal airbag, Front passenger side airbag, Drive side airbag',4,631,10,600,11,92,600,'AWD (All Wheel Drive)','V','600NM@6500rpm','Rear, Transverse','Injection',1165,4459,1924,'Convertible',2,'5.6','631PS@8250rpm',NULL,NULL,'7',NULL,'Aluminum double-wishbone suspension','Aluminum double-wishbone suspension',NULL,NULL,'245/30 R20','245/30 R20','R20','305/30 R20','Power seats','Smart Key','8250','Analog',2,'2620 mm','R20','Yes',NULL,'Yes','Yes','3 years / Unlimited Kms','Yes','Yes','Yes','Digital','Front','Yes','Front','Yes',NULL,'Yes','Automatic','Analog + Digital',NULL,'Yes','Driver & Front Passenger',NULL,'Yes','Yes','Yes',NULL,NULL,NULL,'Sport','Yes',NULL,'Yes','Yes',NULL,NULL,NULL,'Yes','Yes','Front Row',NULL,'Yes','Yes','Yes','Yes',4,NULL,'Rake, Reach',NULL,NULL,'Front and rear sensors with camera','Yes','Yes',NULL,NULL,NULL,'Touch Sensitive','Multifunction Steering Wheel','Yes','Yes','Electric Adjustment','Yes',NULL,'Yes',NULL,'Yes','Yes',NULL,NULL,'Only front',NULL,NULL,'Yes','Yes','Yes','Yes',NULL,'Yes',NULL,NULL,NULL,NULL,'none');